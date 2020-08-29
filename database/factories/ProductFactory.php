<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AlloomCustomers\Products\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => rand(1.11, 999.99),
        'alloom_customer_id' => factory(App\Models\AlloomDelivery\AlloomCustomer::class),
    ];
});
