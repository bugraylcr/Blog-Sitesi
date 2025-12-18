<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //  Schema::create('icerikler', function (Blueprint $table) {
             // burada içerik tablosunun değerlerini kullanıyoruz 

      Schema::create('icerikler', function (Illuminate\Database\Schema\Blueprint $table) {
    $table->id();
    $table->string('baslik', 150);
    $table->text('icerik');
    $table->boolean('yayinda')->default(0);
});

       //  });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('icerikler');
    }



};
