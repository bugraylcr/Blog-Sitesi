<?php

namespace App\Http\Controllers;

 // use App\Models;
use App\Models\icerik;
use App\Models\yorum;
use Illuminate\Http\Request;

class IcerikController extends Controller
{
     public function index()
    {
        $icerikler = icerik::where('yayinda', 1)->orderByDesc('id')->get();
        return view('ana-sayfa', compact('icerikler'));
    }

    // Detay: içerik + sadece onaylı yorumlar
    public function show($id)
    {
        $icerik = Icerik::where('id', $id)->where('yayinda', 1)->firstOrFail();

        // Sadece parent_id'si olmayan (ana yorumlar) ve onaylı olanları çek
        $yorumlar = yorum::where('icerik_id', $id)
            ->whereNull('parent_id') // Bu satır tekrarı önler
            ->where('onayli', 1)
            ->with('yanitlar') // Yanıtları ilişkiyle beraber çek
            ->get();

        return view('hikaye-detay', compact('icerik', 'yorumlar'));
    }
}
