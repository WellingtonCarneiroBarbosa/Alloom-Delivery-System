<?php

use App\Models\Alloom\Tenant;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::create([
            'url_prefix' => "pizza-do-ze"
        ]);
    }
}
