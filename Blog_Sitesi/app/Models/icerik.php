<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Icerik extends Model
{
    //
   protected $table = 'icerikler';
    //  public $timestamps = true;
    protected $fillable = ['baslik','icerik','yayinda',"created_at","updated_at"];
  
    // bir içerik birden fazla yoruma sahiptir anlamındadır 
    public function yorumlar() {
         return $this->hasMany(yorum::class, 'icerik_id'); 
        }
}
