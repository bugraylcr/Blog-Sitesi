<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IcerikController;
use App\Http\Controllers\YorumController;
use App\Http\Controllers\IletisimController;
use App\Http\Controllers\AdminController;


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

Route::get('/bilgilendirme-sayfa', fn() => view('bilgilendirme-sayfa'));


 // use App\Http\Controllers\AdminController;
Route::middleware(['auth', 'verified'])->group(function () {
 // Route::get('/admin', [AdminController::class, 'dashboard']);
// ->name('admin.dashboard') ekledim
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
 // Route::get('/admin', fn() => view('admin'));

Route::post('/admin/icerik-ekle', [AdminController::class, 'icerikEkle']);


// dinamik bir işlem olduğu için böyle yapılıyor 
Route::post('/admin/icerik/{id}/yayina-al', [AdminController::class, 'icerikYayinaAl']);
Route::post('/admin/icerik/{id}/yayindan-kaldir', [AdminController::class, 'icerikYayindanKaldir']);

Route::post('/admin/yorum/{id}/onayla', [AdminController::class, 'yorumOnayla']);
Route::post('/admin/yorum/{id}/sil', [AdminController::class, 'yorumSil']);

Route::delete('/admin/icerik/{id}', [AdminController::class, 'destroy'])->name('admin.icerik.destroy');


});
require __DIR__.'/auth.php';