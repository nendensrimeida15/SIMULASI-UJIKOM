<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
           'username' => 'cica',
           'password' => bcrypt('12345678'),
           'email' => 'cica@gmail.com',
           'nama_lengkap' => 'cica',
           'role' => 'administrator',
           'alamat' => 'subang',
        ]);
    }
}
