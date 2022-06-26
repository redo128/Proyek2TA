<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSewaMobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa_mobil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mobil_id')->nullable();
            $table->foreign('mobil_id')->references('id')->on('mobil');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('pegawai_id')->nullable();
            $table->foreign('pegawai_id')->references('id_pegawai')->on('pegawai');
            $table->string('alamat');
            $table->date('tanggal_sewa');
            $table->date('tanggal_kembali');
            $table->unsignedBigInteger('tarif');
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
        Schema::dropIfExists('sewa_mobil');
    }
}
