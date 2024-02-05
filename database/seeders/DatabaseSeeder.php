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
            'NamaLengkap' => "Nenden",
            'Username'=> 'nenden',
            'Email'=> 'nendensrmda05@example.com',
            'Password'=> bcrypt('password'),
           
            
        ]);
    }
}
