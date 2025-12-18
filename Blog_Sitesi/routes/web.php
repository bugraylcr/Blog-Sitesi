<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IcerikController;
use App\Http\Controllers\YorumController;
use App\Http\Controllers\IletisimController;



Route::get('/', function () {
    return view('ana-sayfa');
});

// Route::get('/', function () {
//     return view('ana-sayfa');
// });

// Route::get('/', function () {
//     return view('ana-sayfa');
// });

Route::get('/bilgilendirme-sayfa', function () {
    return view('bilgilendirme-sayfa');
});

Route::get('/hikaye-detay', function () {
    return view('hikaye-detay');
});
Route::get('/iletisim', function () {
    return view('iletisim');
});


Route::get('/', [IcerikController::class, 'index']);
Route::get('/icerik/{id}', [IcerikController::class, 'show']);

Route::post('/icerik/{id}/yorum', [YorumController::class, 'store']);

Route::get('/iletisim', fn() => view('iletisim'));
Route::post('/iletisim', [IletisimController::class, 'store']);