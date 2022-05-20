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
        Schema::create('egitim_puans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sinav_id'); 
            $table->string('dogru_sayisi');
            $table->string('yanlis_sayisi');            
            $table->string('puan')->nullable();
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
        Schema::dropIfExists('egitim_puans');
    }
};