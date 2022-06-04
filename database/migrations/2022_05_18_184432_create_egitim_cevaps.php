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
        Schema::create('egitim_cevaps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soru_id'); 
            $table->string('cevap_no');
            $table->string('icerik');
            $table->boolean('dogru')->default('0');       
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
        Schema::dropIfExists('egitim_cevaps');
    }
};
