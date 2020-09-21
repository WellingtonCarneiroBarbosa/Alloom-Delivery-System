<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alloom\Tenant;
use Faker\Generator as Faker;
use App\Models\Franchise\Label;
use App\Models\Tenant\Franchise;
use App\Models\Franchise\Pizza\Size;
use App\Models\Franchise\Pizza\Border;
use App\Models\Franchise\Pizza\Flavor;
use App\Models\Franchise\Pizza\BorderPrice;
use App\Models\Franchise\Pizza\FlavorPrice;

$factory->define(Tenant::class, function (Faker $faker) {
    return [
        "url_prefix" => strtolower($faker->unique()->name)
    ];
});

$factory->define(Franchise::class, function (Faker $faker) {
    return [
        "name" => $faker->company,
        "url_prefix" => strtolower($faker->unique()->city),
        "country" => "Brazil",
        "state" => $faker->state,
        "city" => $faker->city,
        "address" => $faker->address,
        "neighborhood" => "Afonso Pena",
        "tenant_id" => Tenant::class,
    ];
});
