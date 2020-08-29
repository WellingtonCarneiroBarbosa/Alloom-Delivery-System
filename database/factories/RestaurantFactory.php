<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AlloomCustomers\Restaurants\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    $opens_at = $faker->time;

    do {
        $closes_at = $faker->time;
    } while($opens_at > $closes_at);


    return [
        'name' => $faker->word,
        'address' => $faker->unique()->address,
        'opens_at' => $opens_at,
        'closes_at' => $closes_at,
        'alloom_customer_id' => factory(App\Models\AlloomDelivery\AlloomCustomer::class),
    ];
});
