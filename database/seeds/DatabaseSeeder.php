<?php

use App\Models\Alloom\Tenant;
use App\Models\Franchise\Label;
use Illuminate\Database\Seeder;
use App\Models\Tenant\Franchise;
use App\Models\Tenant\Restaurant;
use App\Models\Franchise\Pizza\Size;
use App\Models\Franchise\Pizza\Border;
use App\Models\Franchise\Pizza\Flavor;
use App\Models\Franchise\Pizza\BorderPrice;
use App\Models\Franchise\Pizza\FlavorPrice;

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
            //pizza-do-ze | //first unit
            $this->call(SystemSeeder::class);
            $this->call(PizzaSeeder::class);

            /**
             * Multi customers
             */

            echo "\rFactoring Multi Franchises Schema...\n";

            factory(Tenant::class, 3)->create()->each(function ($tenant) {
                $tenant->franchises()->save(factory(Franchise::class)->make());
            });
            echo "\rMulti Franchises Schema Factored\n";
        }

    }
}
