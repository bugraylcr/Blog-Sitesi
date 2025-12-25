<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class yorum extends Model
{
     protected $table = 'yorumlar';
    //  public $timestamps = false;
        use SoftDeletes;
    protected $fillable = ['icerik_id', 'ad', 'eposta', 'yorum', 'onayli','parent_id',"created_at","updated_at"];

    public function icerik()
    {
        return $this->belongsTo(icerik::class, 'icerik_id');
    }
    public function yanitlar()
    {
    // Sadece onaylı alt yorumları getir
        return $this->hasMany(yorum::class, 'parent_id')->where('onayli', 1);
    }
}
