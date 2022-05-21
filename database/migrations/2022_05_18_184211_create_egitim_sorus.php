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
        Schema::create('egitim_sorus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sinav_id'); 
            $table->string('soru_no');
            $table->string('soru');
            $table->string('resim')->nullable();
            $table->string('resim_aciklama')->nullable();  
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
        Schema::dropIfExists('egitim_sorus');
    }
};
