<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// burada form dan gelen veriyi işlemek için Request kullanılır 

use App\Models\Icerik;
use App\Models\Yorum;
use App\Models\iletisim;
use App\Models\iletisimkurma;

// burada extends ile kalıtım işlemi yapılır 
class AdminController extends Controller
{
    public function dashboard()
    {
        // içerik tablosundaki tüm verileri id ye göre azalan şekilde alır
        // get hepsini liste olarak alır 
        $icerikler = Icerik::orderBy('id','desc')->get();
        $yorumlar = Yorum::orderBy('id','desc')->get();
        $mesajlar = Iletisimkurma::orderBy('id','desc')->get();
            // compact ile değişkenler view e gönderilir
        return view('admin', compact('icerikler','yorumlar','mesajlar'));
    }

    public function icerikEkle(Request $request)
    {
        $request->validate([
            'baslik' => 'required', // burada zorunluluk sağlanır 
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
    // Burada Yazılan içeriğin silinme işlemi yapılır 
      public function icerikSil($id)
    {
        icerik::where('id',$id)->delete();
        return back();
    }
    public function destroy($id)
    {
    $icerik = Icerik::findOrFail($id);
    $icerik->delete();

    return back()->with('success', 'İçerik silindi.');
    }
}
