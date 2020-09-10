<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alloom\Tenant;
use Faker\Generator as Faker;

$factory->define(Tenant::class, function (Faker $faker) {
    return [
        'url_prefix' => strtolower($faker->unique()->company),
    ];
});
