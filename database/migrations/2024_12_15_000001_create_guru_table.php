<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id('id_guru');
            $table->string('nip', 50);
            $table->string('nama_lengkap', 100);
            $table->text('alamat')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('no_hp', 15)->nullable();
            $table->string('mata_pelajaran', 100)->nullable();
            $table->string('username', 50);
            $table->string('password', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('guru');
    }
}
