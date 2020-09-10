<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alloom\Tenant;
use App\Models\Tenant\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        "unit_name" => $faker->unique()->company,
        "tenant_id" => factory(Tenant::class),
    ];
});
