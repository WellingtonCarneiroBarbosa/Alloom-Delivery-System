<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AlloomCustomers\Orders\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'product_id' => factory(App\Models\AlloomCustomers\Products\Product::class),
        'status' => null,
        'alloom_customer_restaurant_id' => factory(App\Models\AlloomCustomers\Restaurants\Restaurant::class),
    ];
});
