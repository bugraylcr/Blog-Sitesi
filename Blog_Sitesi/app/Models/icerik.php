<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Icerik extends Model
{
  // yapılması gereken bir diğer özellik ise softdeletes yapmak 
  // nedense softDeletes eklediğim zaman hata alıyorum 
 // bunu nasıl çözebilirim

       use SoftDeletes;
   protected $table = 'icerikler';
    //  public $timestamps = true;
    protected $fillable = ['baslik','icerik','yayinda',"created_at","updated_at"];
  
    // bir içerik birden fazla yoruma sahiptir anlamındadır 
    public function yorumlar() {
         return $this->hasMany(yorum::class, 'icerik_id'); 
        }
}
