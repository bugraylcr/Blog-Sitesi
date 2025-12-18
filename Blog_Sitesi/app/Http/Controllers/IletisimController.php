<?php

namespace App\Http\Controllers;

use App\Models\iletisimkurma;
use Illuminate\Http\Request;

class IletisimController extends Controller
{
     public function store(Request $request)
    {
        $validated = $request->validate([
            'ad'     => 'required|min:2|max:100',
            'eposta' => 'required|email|max:150',
            'konu'   => 'nullable|max:150',
            'mesaj'  => 'required|min:5',
        ]);

        iletisimkurma::create([
            'ad'     => $validated['ad'],
            'eposta' => $validated['eposta'],
            'konu'   => $validated['konu'] ?? null,
            'mesaj'  => $validated['mesaj'],
            'okundu' => 0,
        ]);

        return back()->with('başarılı', 'Mesajınız gönderildi.');
    }
}
