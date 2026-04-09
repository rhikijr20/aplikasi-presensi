<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarHadirTable extends Migration
{
    public function up()
    {
        Schema::create('daftar_hadir', function (Blueprint $table) {
            $table->id('id_daftarhadir'); // unsignedBigInteger otomatis
            $table->unsignedBigInteger('id_jadwal')->nullable(); // Pastikan tipe data cocok
            $table->unsignedBigInteger('id_user')->nullable();
            $table->date('tanggal');
            $table->enum('status', ['hadir', 'izin', 'sakit', 'tanpa keterangan']);
            $table->timestamps();
        
            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwal')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });                
    }

    public function down()
    {
        Schema::dropIfExists('daftar_hadir');
    }
}
