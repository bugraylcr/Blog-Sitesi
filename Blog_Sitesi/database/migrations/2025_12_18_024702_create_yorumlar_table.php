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
      //    Schema::create('yorumlar', function (Blueprint $table) {
    
Schema::table('yorumlar', function (Illuminate\Database\Schema\Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('icerik_id');
    $table->string('ad', 100);
    $table->string('eposta', 150);
    $table->text('yorum');
    $table->boolean('onayli')->default(0);

    $table->foreign('icerik_id') // burada foreign key yapısı ve 
          ->references('id') // burada ise primary key vardır 
          ->on('icerikler')
          // burada bir içerik silindiği zaman tüm yorumları silmek için kullanılır 
 // burada zaten primary key ile foreign key mantığı vardır. 
 // cascade ile delete işlemlerini de yapar 

          ->onDelete('cascade');
});



         // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yorumlar');
    }
};
