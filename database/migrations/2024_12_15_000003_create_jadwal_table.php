<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id('id_jadwal'); // `id_jadwal` dibuat dengan tipe unsignedBigInteger
            $table->unsignedBigInteger('id_mapel')->nullable();
            $table->unsignedBigInteger('id_guru')->nullable();
            $table->enum('hari', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']);
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->timestamps();
        
            $table->foreign('id_mapel')->references('id_mapel')->on('mata_pelajaran')->onDelete('cascade');
            $table->foreign('id_guru')->references('id_guru')->on('guru')->onDelete('cascade');
        });                
    }

    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
