<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\AlloomDelivery\AlloomUser;

class AlloomUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = AlloomUser::create([
            'name' => "Administrador",
            'email' => "admin@example.com",
            'email_verified_at' => now(),
            "password" => bcrypt("12345678"),
            'remember_token' => Str::random(10),
        ]);

        $admin->assignRole('admin')->guard(['alloom_user']);
    }
}
