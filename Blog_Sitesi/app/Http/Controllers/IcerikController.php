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

        $yorumlar = yorum::where('icerik_id', $id)
            ->where('onayli', 1)
            ->orderByDesc('id')
            ->get();

        return view('hikaye-detay', compact('icerik', 'yorumlar'));
    }
}
