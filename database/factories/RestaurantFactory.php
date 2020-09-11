<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alloom\Tenant;
use App\Models\Tenant\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        "unit_name" => $faker->company,
        "unit_url_prefix" => strtolower($faker->unique()->city),
        "tenant_id" => 1,
    ];
});
