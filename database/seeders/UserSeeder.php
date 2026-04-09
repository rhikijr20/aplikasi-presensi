<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'rhiki yama',
            'nisn' => '152021212',
            'alamat' => 'Jl. Cikutra',
            'email' => 'rhikiyama@gmail.com',
            'password' => bcrypt('1234'),
        ]);
    }
}
