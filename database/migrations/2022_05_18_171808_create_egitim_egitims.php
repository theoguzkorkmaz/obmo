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
        Schema::create('egitim_egitims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id'); 
            $table->string('baslik');
            $table->text('icerik');
            $table->string('resim')->nullable();
            $table->string('resim_aciklama')->nullable();
            $table->string('etiket')->nullable();
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
        Schema::dropIfExists('egitim_egitims');
    }
};
