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
        Schema::create('egitim_navbars', function (Blueprint $table) {
            $table->id();            
            $table->string('ad');
            $table->string('icon');
            $table->string('link');
            $table->string('icerik');
            $table->boolean('ismenu')->default('0');
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
        Schema::dropIfExists('egitim_navbars');
    }
};
