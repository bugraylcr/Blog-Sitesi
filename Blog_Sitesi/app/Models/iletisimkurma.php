<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class iletisimkurma extends Model
{
    protected $table = 'iletisim_mesajlari';
    public $timestamps = false;

    protected $fillable = ['ad', 'eposta', 'konu', 'mesaj', 'okundu'];
}
