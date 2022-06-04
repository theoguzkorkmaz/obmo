<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egitim_yorums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('egitim_id'); 
            $table->foreignId('kullanici_id');
            $table->string('baslik')->nullable();
            $table->text('icerik')->nullable();  
            $table->foreignId('admin');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egitim_yorums');
    }
};
