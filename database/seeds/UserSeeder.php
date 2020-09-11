<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Wellington Barbosa',
            'email' => 'admin@admin.com',
            'password' => bcrypt("password"),
            'email_verified_at' => now(),
        ]);
    }
}