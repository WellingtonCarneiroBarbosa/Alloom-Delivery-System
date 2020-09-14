<?php

use App\User;
use App\TenantUser;
use App\Models\Tenant\Label;
use App\Models\Alloom\Tenant;
use Illuminate\Database\Seeder;
use App\Models\Tenant\Pizza\Size;
use App\Models\Tenant\Pizza\Flavor;
use App\Models\Tenant\Configuration;
use App\Models\Tenant\Pizza\Border;
use App\Models\Tenant\Pizza\BorderAvailableOn;
use App\Models\Tenant\Pizza\BorderPrice;
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
         * Set tenant configurations
         *
         */
        Configuration::create([
            "tenant_id" => 1,
            'price_per_pizza_size' => true
        ]);
        echo "\rSeeded Tenant Configuration\n";

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
                "max_flavors" => 1,
                "pieces" => 4,
                "tenant_id" => 1,
                "price" => "25.99"
            ],

            1 => [
                "name" => "Média",
                "max_flavors" => 2,
                "pieces" => 8,
                "tenant_id" => 1,
                "price" => "45.44"
            ],

            2 => [
                "name" => "Grande",
                "max_flavors" => 3,
                "pieces" => 12,
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
         * Create a new pizza border type
         */
        $pizza_borders = [
            0 => [
                "name" => "Tradicional",
                "is_traditional" => true,
                "tenant_id" => 1
            ],

            1 => [
                "name" => "Catupiry",
                "tenant_id" => 1
            ],

            2 => [
                "name" => "Cheddar",
                "tenant_id" => 1
            ]
        ];

        foreach($pizza_borders as $pizza_border) {
            Border::create($pizza_border);
        }

        echo "\rSeeded Pizza Border Types\n";

        /**
         * Create prices to these borders
         */
        $pizza_border_prices = [
            0 => [
                "pizza_border_type_id" => 2,
                "pizza_size_id" => 1,
                "price" => 1.00,
            ],
            1 => [
                "pizza_border_type_id" => 2,
                "pizza_size_id" => 2,
                "price" => 2.00
            ],
            2 => [
                "pizza_border_type_id" => 2,
                "pizza_size_id" => 3,
                "price" => 4.00
            ],
            3 => [
                "pizza_border_type_id" => 3,
                "pizza_size_id" => 1,
                "price" => 2.00
            ],
            4 => [
                "pizza_border_type_id" => 3,
                "pizza_size_id" => 2,
                "price" => 3.00
            ],
            5 => [
                "pizza_border_type_id" => 3,
                "pizza_size_id" => 3,
                "price" => 5.00
            ]
        ];

        foreach ($pizza_border_prices as $border_price) {
            BorderPrice::create($border_price);
        }

        echo "\rSeeded Border Prices\n";


        /**
         * Make these borders available to units
         */
        $borders_available_on = [
            0 => [
                "pizza_border_type_id" => 1,
                "restaurant_id" => 1,
                "tenant_id" => 1
            ],

            1 => [
                "pizza_border_type_id" => 2,
                "restaurant_id" => 1,
                "tenant_id" => 1
            ],

            2 => [
                "pizza_border_type_id" => 3,
                "restaurant_id" => 1,
                "tenant_id" => 1
            ]
        ];

        foreach($borders_available_on as $border_available_on) {
            BorderAvailableOn::create($border_available_on);
        }
        echo "\rSeeded Pizza Border Types Available On\n";

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
                "pizza_flavor_id" => 7,
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
