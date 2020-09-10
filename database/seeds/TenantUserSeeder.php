<?php

use App\TenantUser;
use Illuminate\Database\Seeder;

class TenantUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TenantUser::create([
            'name' => 'Marcos Rocha',
            'email' => 'tenant@tenant.com',
            'password' => bcrypt("password"),
            'email_verified_at' => now(),
            'tenant_id' => 1,
        ]);
    }
}
