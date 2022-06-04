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
        Schema::create('haber_topbars', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->string('link');
            $table->string('aciklama')->nullable();
            $table->boolean('yer')->default(0);
            $table->string('icon')->nullable();
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
        Schema::dropIfExists('haber_topbars');
    }
};
