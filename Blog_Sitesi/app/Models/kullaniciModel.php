<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kullaniciModel extends Model
{
       protected $table = "kullanicilar";
    protected $fillable = ["email","sifre","rol","created_at","updated_at"];

}
