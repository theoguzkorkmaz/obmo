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
        Schema::create('haber_habers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id'); 
            $table->string('baslik');
            $table->text('icerik')->nullable();
            $table->string('resim')->nullable();
            $table->string('resim_aciklama')->nullable();
            $table->string('etiket')->nullable();
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
        Schema::dropIfExists('haber_habers');
    }
};
