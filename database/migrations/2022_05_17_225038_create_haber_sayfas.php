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
        Schema::create('haber_sayfas', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->text('icerik');
            $table->string('resim')->nullable();
            $table->boolean('navbar_gorunme')->default(1)->nullable();
            $table->boolean('footer_gorunme')->default(1)->nullable(); 
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
        Schema::dropIfExists('haber_sayfas');
    }
};
