<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
           'username' => 'nenden',
           'password' => bcrypt('12345678'),
           'email' => 'nenden@gmail.com',
           'nama_lengkap' => 'nenden',
           'role' => 'administrator',
           'alamat' => 'subang',
           
            
        ]);
    }
}
