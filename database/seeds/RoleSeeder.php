<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = Role::create([
            'name' => "manager",
            'guard_name' => "alloom_customer_user",
        ]);

        $clerk = Role::create([
            'name' => "clerk",
            'guard_name' => "alloom_customer_user",
        ]);

        $delivery_man = Role::create([
            'name' => "delivery_man",
            'guard_name' => "alloom_customer_user",
        ]);

        $cooker = Role::create([
            'name' => "cooker",
            'guard_name' => "alloom_customer_user",
        ]);

        $admin = Role::create([
            'name' => "admin",
            'guard_name' => "alloom_user",
        ]);
    }
}
