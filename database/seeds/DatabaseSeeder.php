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
        $this->call(AlloomCustomerSeeder::class);
        $this->call(AlloomUserSeeder::class);

        /**
         * Local database seeder
         */
        if(config('app.env') === "local") {

        }

        // $this->call(UserSeeder::class);
    }
}
