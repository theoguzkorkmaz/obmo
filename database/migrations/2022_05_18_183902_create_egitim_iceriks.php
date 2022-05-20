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
        Schema::create('egitim_iceriks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('egitim_id'); 
            $table->string('icerik_no');
            $table->string('baslik');
            $table->text('aciklama');
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
        Schema::dropIfExists('egitim_iceriks');
    }
};
