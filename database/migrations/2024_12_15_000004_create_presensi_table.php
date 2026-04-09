<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresensiTable extends Migration
{
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->id('id_presensi');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->date('tanggal');
            $table->enum('status', ['hadir', 'izin', 'sakit', 'tanpa keterangan']);
            $table->string('foto', 255)->nullable();
            $table->string('lokasi', 255)->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('presensi');
    }
}
