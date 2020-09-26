<?php

use App\User;
use App\Models\Alloom\Tenant;
use App\Models\Franchise\Configuration;
use App\Models\Franchise\Label;
use Illuminate\Database\Seeder;
use App\Models\Tenant\Franchise;
use App\Models\Franchise\Order\DeliveryFee;

class SystemSeeder extends Seeder
{
    protected function seedLabels() {
        $labels = [
            [
                "name" => "Tradicional",
                "franchise_id" => 1
            ],
            [
                "name" => "Nobre",
                "franchise_id" => 1
            ],
            [
                "name" => "Doce",
                "franchise_id" => 1
            ]
        ];

        foreach($labels as $label) {
            Label::create($label);
        }
        echo "\rSeeded Labels\n";
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Alloom Admin",
            "email" => "alloomadmin@example.org",
            "password" => bcrypt("password"),
            "email_verified_at" => now(),
        ]);
        echo "\rSeeded Alloom Admin\n";

        Tenant::create([
            "name" => "Wellington Barbosa",
            "corporative_name" => "Pizzaria Alloom",
            "url_prefix" => "pizzaria-alloom"
        ]);
        echo "\rSeeded Tenant\n";

        Franchise::create([
            "name" => "Afonso Pena",
            "url_prefix" => "afonso-pena",
            "country" => "Brazil",
            "state" => "Paraná",
            "city" => "São José dos Pinhais",
            "neighborhood" => "Afonso Pena",
            "address" => "Rua Senador Darci Ribeiro 3745",
            "tenant_id" => 1
        ]);
        echo "\rSeeded Franchise\n";

        Configuration::create([
            "minimum_order" => "12.00",
            "franchise_id" => 1
        ]);

        DeliveryFee::create([
            "fee_per_km" => "2.00",
            "maximum_delivery_distance_in_km" => "5",
            "default_fee" => false,
            "franchise_id" => 1
        ]);

        $this->seedLabels();
    }
}
