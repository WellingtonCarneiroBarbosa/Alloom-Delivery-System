<?php

use App\Models\Tenant\Franchise;
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
            $this->call(SystemSeeder::class);

            echo "\rFactoring Franchises...\n";
            factory(Franchise::class, 3)->create();
            echo "\rFranchises Factored\n";

            $this->call(PizzaSeeder::class);
        }

    }
}
