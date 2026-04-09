<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key (bigIncrements by default)
            $table->string('name'); // Nama pengguna
            $table->string('nisn');
            $table->string('alamat');
            $table->string('email')->unique(); // Email pengguna, harus unik
            $table->timestamp('email_verified_at')->nullable(); // Tanggal verifikasi email
            $table->string('password'); // Password pengguna
            $table->rememberToken(); // Token untuk "remember me" pada autentikasi
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
