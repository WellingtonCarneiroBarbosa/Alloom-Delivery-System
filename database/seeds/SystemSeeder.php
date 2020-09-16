<?php

use App\Models\Alloom\Tenant;
use App\Models\Tenant\Franchise;
use App\Models\Franchise\Label;
use App\User;
use Illuminate\Database\Seeder;

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
            "url_prefix" => "pizza-do-ze"
        ]);
        echo "\rSeeded Tenant\n";

        Franchise::create([
            "name" => "Centro",
            "url_prefix" => "centro",
            "tenant_id" => 1
        ]);
        echo "\rSeeded Franchise\n";

        $this->seedLabels();
    }
}
