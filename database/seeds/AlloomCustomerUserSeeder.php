<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AlloomCustomerUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = User::create([
            'name' => "Gerente",
            'email' => "manager@example.com",
            'is_master' => true,
            'email_verified_at' => now(),
            "password" => bcrypt("password"),
            'remember_token' => Str::random(10),
            'alloom_customer_id' => 1,
        ]);

        $manager->assignRole('manager')->guard(['alloom_customer_user']);

        $clerk = User::create([
            'name' => "Atendente",
            'email' => "clerk@example.com",
            'is_master' => false,
            'email_verified_at' => now(),
            "password" => bcrypt("password"),
            'remember_token' => Str::random(10),
            'alloom_customer_id' => 1,
        ]);

        $clerk->assignRole('clerk')->guard(['alloom_customer_user']);

        $delivery_man = User::create([
            'name' => "Entregador",
            'email' => "delivery_man@example.com",
            'is_master' => false,
            'email_verified_at' => now(),
            "password" => bcrypt("password"),
            'remember_token' => Str::random(10),
            'alloom_customer_id' => 1,
        ]);

        $delivery_man->assignRole('delivery_man')->guard(['alloom_customer_user']);

        $cooker = User::create([
            'name' => "Cozinheiro",
            'email' => "cooker@example.com",
            'is_master' => false,
            'email_verified_at' => now(),
            "password" => bcrypt("password"),
            'remember_token' => Str::random(10),
            'alloom_customer_id' => 1,
        ]);

        $cooker->assignRole('cooker')->guard(['alloom_customer_user']);

    }
}
