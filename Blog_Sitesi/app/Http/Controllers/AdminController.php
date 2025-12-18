<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Icerik;
use App\Models\Yorum;
 use App\Models\iletisim;
use App\Models\iletisimkurma;

class AdminController extends Controller
{
    public function dashboard()
    {
        $icerikler = Icerik::orderBy('id','desc')->get();
        $yorumlar = Yorum::orderBy('id','desc')->get();
        $mesajlar = Iletisimkurma::orderBy('id','desc')->get();

        return view('admin', compact('icerikler','yorumlar','mesajlar'));
    }

    public function icerikEkle(Request $request)
    {
        $request->validate([
            'baslik' => 'required',
            'icerik' => 'required',
        ]);

        Icerik::create([
            'baslik' => $request->baslik,
            'icerik' => $request->icerik,
            'yayinda' => 0,
        ]);

        return back()->with('success', 'İçerik eklendi (yayında değil).');
    }

    public function icerikYayinaAl($id)
    {
        Icerik::where('id',$id)->update(['yayinda' => 1]);
        return back();
    }

    public function icerikYayindanKaldir($id)
    {
        Icerik::where('id',$id)->update(['yayinda' => 0]);
        return back();
    }

    public function yorumOnayla($id)
    {
        Yorum::where('id',$id)->update(['onayli' => 1]);
        return back();
    }

    public function yorumSil($id)
    {
        Yorum::where('id',$id)->delete();
        return back();
    }
}
