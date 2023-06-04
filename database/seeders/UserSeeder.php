<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i=0; $i < 50; $i++) {
            User::create(
                [
                    'nombre' => "usuario$i",
                    'email' => "email@test.com",
                    'password' => bcrypt("pass$i"),
                ]
            );
        }
    }
}
