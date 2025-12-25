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
      //    Schema::create('iletisim', function (Blueprint $table) {
        
        Schema::create('iletisim', function (Illuminate\Database\Schema\Blueprint $table) {
    $table->id();
    $table->string('ad', 100);
    $table->string('eposta', 150);
    $table->string('konu', 150)->nullable();
    $table->text('mesaj');
    $table->boolean('okundu')->default(0);
});

     //   });
    }

    /**
     * ters the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iletisim');
    }
};
