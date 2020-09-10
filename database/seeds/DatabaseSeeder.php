<?php

use App\Models\Tenant\Restaurant;
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
        /**
         * Local Seeders
         */
        if(app()->environment() === "local") {
            $this->call(UserSeeder::class);
            $this->call(TenantSeeder::class);
            $this->call(TenantUserSeeder::class);

            echo "\rFactoring Restaurants\n";
            factory(Restaurant::class, 3)->create();
            echo "\rRestaurants Factored\n";
        }

    }
}
