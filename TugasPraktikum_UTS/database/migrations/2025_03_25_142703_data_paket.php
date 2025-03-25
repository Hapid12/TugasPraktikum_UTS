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
        Schema::create('data_Paket', function (Blueprint $table) {
            $table->id();
            $table->integer('noresi');
            $table->string('pengirim');
            $table->string('penerima');
            $table->string('asal');
            $table->string('tujuan');
            $table->string('status');
            $table->string('tanggalUpdate');
            $table->string('estimasiTiba');
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
        Schema::dropIfExists('data_Paket');
    }
};
