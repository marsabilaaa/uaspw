<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasisTable extends Migration
{
    public function up()
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id('reservasi_id');
            $table->unsignedInteger('tamu_id');
            $table->foreign('tamu_id')->references('tamu_id')->on('tamus');
            $table->unsignedInteger('kamar_id');
            $table->foreign('kamar_id')->references('kamar_id')->on('kamars');
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservasis');
    }
}
