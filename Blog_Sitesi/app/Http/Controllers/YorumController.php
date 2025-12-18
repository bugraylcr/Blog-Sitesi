<?php

namespace App\Http\Controllers;

use App\Models\icerik;
use App\Models\yorum;
use Illuminate\Http\Request;

class YorumController extends Controller
{
     public function store(Request $request, $id)
    {
        // içerik var mı + yayında mı?
        icerik::where('id', $id)->where('yayinda', 1)->firstOrFail();

        $validated = $request->validate([
            'ad'    => 'required|min:2|max:100',
            'eposta'=> 'required|email|max:150',
            'yorum' => 'required|min:5',
        ]);

        yorum::create([
            'icerik_id' => $id,
            'ad'        => $validated['ad'],
            'eposta'    => $validated['eposta'],
            'yorum'     => $validated['yorum'],
            'onayli'    => 0,
        ]);

        return back()->with('success', 'Yorumunuz onay için gönderildi.');
    }
}
