<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // up tabloyu oluşturma ve down ise tabloyu silme işlemi yapar
    public function up(): void
    {
        //  Schema::create('icerikler', function (Blueprint $table) {
             // burada içerik tablosunun değerlerini kullanıyoruz 

      Schema::table('icerikler', function (Illuminate\Database\Schema\Blueprint $table) {
    $table->id();
    $table->string('baslik', 150);
    $table->text('icerik');
    $table->boolean('yayinda')->default(0);
      $table->timestamps();
    $table->softDeletes();

});

       //  });
    }

    /**
     * Reverse the migrations.
     */
    // burada rollback işlemi yapınca php artisan migrate:rollback komutu ile bu tablo silinir
    public function down(): void
    {
        Schema::dropIfExists('icerikler');
    }



};
