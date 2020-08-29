<?php

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
         * Default seeders
         */
        $this->call(RoleSeeder::class);

        /**
         * Local database seeder
         */
        if(app()->environment() === "local") {
            factory(App\Models\AlloomDelivery\AlloomCustomer::class, 2)->create();
            //Default testing users
            $this->call(AlloomCustomerUserSeeder::class);
            $this->call(AlloomUserSeeder::class);


            factory(App\Models\AlloomCustomers\Products\Product::class, 10)->create();
            factory(App\Models\AlloomCustomers\Restaurants\Restaurant::class, 2)->create();
            factory(App\Models\AlloomCustomers\Orders\Order::class, 10)->create();
        }/**End local database seeder */

        /**
         * Production database seeder
         */
        if(app()->environment() === "production") {

        }

        // $this->call(UserSeeder::class);
    }
}
