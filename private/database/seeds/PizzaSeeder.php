<?php

use Illuminate\Database\Seeder;
use App\Models\Franchise\Pizza\Border;
use App\Models\Franchise\Pizza\BorderPrice;
use App\Models\Franchise\Pizza\Flavor;
use App\Models\Franchise\Pizza\FlavorPrice;
use App\Models\Franchise\Pizza\Size;

class PizzaSeeder extends Seeder
{
    protected static function seedBorders() {
        $borders = [
            [
                "name" => "Catupiry",
                "description" => "Borda recheada de catupiry",
                "franchise_id" => 1,
            ],
            [
                "name" => "Cheddar",
                "description" => "Borda recheada de cheddar",
                "franchise_id" => 1
            ]
        ];

        foreach ($borders as $border) {
            Border::create($border);
        }
        echo "\rSeeded Pizza Borders\n";
    }

    protected static function seedFlavors() {
        $flavors = [
            [
                "name" => "Frango com Catupiry",
                "label_id" => 1,
                "description" => "Frango desfiado, cebola e catupiry",
                "franchise_id" => 1,
            ],
            [
                "name" => "Camarão",
                "label_id" => 2,
                "description" => "Camarão, cebola e catupiry",
                "franchise_id" => 1,
            ],
            [
                "name" => "Dois Amores",
                "label_id" => 3,
                "description" => "Chocolate preto e branco ao leite, leite condensado",
                "franchise_id" => 1,
            ],
        ];

        foreach ($flavors as $flavor) {
            Flavor::create($flavor);
        }
        echo "\rSeeded Pizza Flavors\n";
    }

    protected function seedSizes() {
        $sizes = [
            [
                "name" => "Pequena",
                "price" => "25.00",
                "max_flavors" => "1",
                "slices" => "4",
                "description" => "Pizza pequena",
                "franchise_id" => 1,
            ],
            [
                "name" => "Média",
                "price" => "35.00",
                "max_flavors" => "2",
                "slices" => "8",
                "description" => "Pizza média",
                "franchise_id" => 1,
            ],
            [
                "name" => "Grande",
                "price" => "45.00",
                "max_flavors" => "3",
                "slices" => "12",
                "description" => "Pizza grande",
                "franchise_id" => 1,
            ],
        ];

        foreach($sizes as $size) {
            Size::create($size);
        }

        echo "\rSeeded Pizza Sizes\n";
    }

    protected function seedBorderPrices() {
        $borderPrices = [
            [
                "pizza_border_id" => 1,
                "pizza_size_id" => 1,
                "price" => "2.00",
                "franchise_id" => 1
            ],
            [
                "pizza_border_id" => 1,
                "pizza_size_id" => 2,
                "price" => "4.00",
                "franchise_id" => 1
            ],
            [
                "pizza_border_id" => 1,
                "pizza_size_id" => 3,
                "price" => "6.00",
                "franchise_id" => 1
            ],
            /*** */
            [
                "pizza_border_id" => 2,
                "pizza_size_id" => 1,
                "price" => "2.00",
                "franchise_id" => 1
            ],
            [
                "pizza_border_id" => 2,
                "pizza_size_id" => 2,
                "price" => "4.00",
                "franchise_id" => 1
            ],
            [
                "pizza_border_id" => 2,
                "pizza_size_id" => 3,
                "price" => "6.00",
                "franchise_id" => 1
            ],
        ];

        foreach($borderPrices as $borderPrice) {
            BorderPrice::create($borderPrice);
        }

        echo "\rSeeded Border Prices\n";
    }

    protected function seedFlavorPrices() {
        $flavorPrices = [
            [
                "pizza_flavor_id" => 1,
                "pizza_size_id" => 1,
                "price" => "25.00",
                "franchise_id" => 1
            ],
            [
                "pizza_flavor_id" => 1,
                "pizza_size_id" => 2,
                "price" => "35.00",
                "franchise_id" => 1
            ],
            [
                "pizza_flavor_id" => 1,
                "pizza_size_id" => 3,
                "price" => "45.00",
                "franchise_id" => 1
            ],
            /*** */
            [
                "pizza_flavor_id" => 2,
                "pizza_size_id" => 1,
                "price" => "35.00",
                "franchise_id" => 1
            ],
            [
                "pizza_flavor_id" => 2,
                "pizza_size_id" => 2,
                "price" => "45.00",
                "franchise_id" => 1
            ],
            [
                "pizza_flavor_id" => 2,
                "pizza_size_id" => 3,
                "price" => "55.00",
                "franchise_id" => 1
            ],
            /*** */
            [
                "pizza_flavor_id" => 3,
                "pizza_size_id" => 1,
                "price" => "27.00",
                "franchise_id" => 1
            ],
            [
                "pizza_flavor_id" => 3,
                "pizza_size_id" => 2,
                "price" => "37.00",
                "franchise_id" => 1
            ],
            [
                "pizza_flavor_id" => 3,
                "pizza_size_id" => 3,
                "price" => "47.00",
                "franchise_id" => 1
            ],
        ];

        foreach($flavorPrices as $flavorPrice) {
            FlavorPrice::create($flavorPrice);
        }

        echo "\rSeeded Pizza Flavor Prices\n";
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedSizes();
        $this->seedBorders();
        $this->seedBorderPrices();
        $this->seedFlavors();
        $this->seedFlavorPrices();
    }
}
