<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kullaniciModel;
class Kullanicilar extends Controller
{
      public function Ekleme(Request $request){

    
       $mail = $request->mail;
       $sifre = $request->sifre;
      $rol  = $request->rol;
           
    
      kullaniciModel::create([

         "email" => $mail,
         "sifre" => $sifre,
         "rol" => $rol,
        
      ]);
     
       echo "başarılı bir şekilde bilgiler veri tabanına eklenmiştir";
    
    }

    
}
