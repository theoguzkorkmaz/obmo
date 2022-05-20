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
        Schema::create('haber_yorums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('haber_id');
            $table->foreignId('user_id');
            $table->string('baslik');
            $table->string('icerik');
            $table->boolean('onay')->default(0);
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
        Schema::dropIfExists('haber_yorums');
    }
};
