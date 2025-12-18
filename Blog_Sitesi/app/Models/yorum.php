<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class yorum extends Model
{
     protected $table = 'yorumlar';
    public $timestamps = false;

    protected $fillable = ['icerik_id', 'ad', 'eposta', 'yorum', 'onayli'];

    public function icerik()
    {
        return $this->belongsTo(icerik::class, 'icerik_id');
    }
}
