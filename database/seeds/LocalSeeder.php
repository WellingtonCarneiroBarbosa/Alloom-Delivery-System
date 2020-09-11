<?php

use App\User;
use App\TenantUser;
use App\Models\Tenant\Label;
use App\Models\Alloom\Tenant;
use Illuminate\Database\Seeder;
use App\Models\Tenant\Pizza\Size;
use App\Models\Tenant\Pizza\Flavor;
use App\Models\Tenant\Pizza\SizeAvailableOn;
use App\Models\Tenant\Pizza\FlavorAvailableOn;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Create a new tenant
         *
         */
        Tenant::create([
            'url_prefix' => "pizza-do-ze"
        ]);
        echo "\rSeeded Tenant\n";

        /**
         * Create a new tenant user
         *
         */
        TenantUser::create([
            'name' => 'Marcos Rocha',
            'email' => 'tenant@tenant.com',
            'password' => bcrypt("password"),
            'email_verified_at' => now(),
            'tenant_id' => 1,
        ]);
        echo "\rSeeded Tenant User\n";

        /**
         * Create a new Alloom user
         */
        User::create([
            'name' => 'Wellington Barbosa',
            'email' => 'admin@admin.com',
            'password' => bcrypt("password"),
            'email_verified_at' => now(),
        ]);
        echo "\rSeeded User\n";

        /**
         * Create a new pizza size
         */
        $pizza_sizes = [
            0 => [
                "name" => "Pequena",
                "tenant_id" => 1,
                "price" => "25.99"
            ],

            1 => [
                "name" => "Média",
                "tenant_id" => 1,
                "price" => "45.44"
            ],

            2 => [
                "name" => "Grande",
                "tenant_id" => 1,
                "price" => "55.80"
            ]
        ];

        foreach($pizza_sizes as $pizza_size) {
            Size::create($pizza_size);
        }

        echo "\rSeeded Pizza Sizes\n";

        /**
         * Make these sizes available to units
         */
        $sizes_available_on = [
            0 => [
                "pizza_size_id" => 1,
                "restaurant_id" => 1,
                "tenant_id" => 1
            ],

            1 => [
                "pizza_size_id" => 2,
                "restaurant_id" => 1,
                "tenant_id" => 1
            ],

            2 => [
                "pizza_size_id" => 3,
                "restaurant_id" => 1,
                "tenant_id" => 1
            ]
        ];

        foreach($sizes_available_on as $size_available_on) {
            SizeAvailableOn::create($size_available_on);
        }
        echo "\rSeeded Pizza Sizes Available On\n";

        /**
         * Create new labels
         */
        $labels = [
            0 => [
                "name" => "Tradicional",
                "tenant_id" => 1
            ],

            1 => [
                "name" => "Nobre",
                "tenant_id" => 1
            ],

            2 => [
                "name" => "Doce",
                "tenant_id" => 1
            ],
        ];

        foreach ($labels as $label) {
            Label::create($label);
        }
        echo "\rSeeded Labels\n";

        /**
         * Create new pizza flavors
         */
        $pizza_flavors = [
            0 => [
                "name" => "Frango com Catupiry",
                "label_id" => 1,
                "tenant_id" => 1
            ],

            1 => [
                "name" => "Camarão",
                "label_id" => 2,
                "tenant_id" => 1
            ],

            2 => [
                "name" => "Romeu&Julieta",
                "label_id" => 3,
                "tenant_id" => 1
            ],

            3 => [
                "name" => "Calabresa",
                "label_id" => 1,
                "tenant_id" => 1
            ],

            4 => [
                "name" => "Lombinho",
                "label_id" => 1,
                "tenant_id" => 1
            ],

            5 => [
                "name" => "Costela",
                "label_id" => 2,
                "tenant_id" => 1
            ],

            6 => [
                "name" => "Chocolate Branco",
                "label_id" => 3,
                "tenant_id" => 1
            ],
        ];
        foreach ($pizza_flavors as $flavor) {
            Flavor::create($flavor);
        }
        echo "\rSeeded Pizza Flavors\n";

        /**
         * Make these pizza flavors availables
         * on units
         */
        $pizza_flavors_available_on = [
            0 => [
                "pizza_flavor_id" => 1,
                "restaurant_id" => 1,
                "tenant_id" => 1
            ],

            1 => [
                "pizza_flavor_id" => 2,
                "restaurant_id" => 1,
                "tenant_id" => 1
            ],

            2 => [
                "pizza_flavor_id" => 3,
                "restaurant_id" => 1,
                "tenant_id" => 1
            ],

            3 => [
                "pizza_flavor_id" => 4,
                "restaurant_id" => 1,
                "tenant_id" => 1
            ],

            4 => [
                "pizza_flavor_id" => 5,
                "restaurant_id" => 1,
                "tenant_id" => 1
            ],

            5 => [
                "pizza_flavor_id" => 6,
                "restaurant_id" => 1,
                "tenant_id" => 1
            ],

            6 => [
                "pizza_flavor_id" => 3,
                "restaurant_id" => 1,
                "tenant_id" => 1
            ],
        ];
        foreach ($pizza_flavors_available_on as $pizza_flavor_available_on) {
            FlavorAvailableOn::create($pizza_flavor_available_on);
        }
        echo "\rSeeded Pizza Flavors Available On\n";
    }
}
