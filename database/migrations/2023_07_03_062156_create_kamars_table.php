<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarsTable extends Migration
{
    public function up()
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->id('kamar_id');
            $table->unsignedInteger('hotel_id');
            $table->foreign('hotel_id')->references('hotel_id')->on('hotels');
            $table->string('nomor_kamar');
            $table->string('jenis_kamar');
            $table->decimal('harga', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kamars');
    }
}
