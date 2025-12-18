<?php

use Illuminate\Support\Facades\Route;

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