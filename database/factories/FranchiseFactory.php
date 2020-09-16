<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tenant\Franchise;
use Faker\Generator as Faker;

$factory->define(Franchise::class, function (Faker $faker) {
    return [
        "name" => $faker->company,
        "url_prefix" => strtolower($faker->unique()->city),
        "tenant_id" => 1,
    ];
});
