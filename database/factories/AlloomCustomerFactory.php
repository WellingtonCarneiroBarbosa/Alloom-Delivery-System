<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AlloomDelivery\AlloomCustomer;
use Faker\Generator as Faker;

$factory->define(AlloomCustomer::class, function (Faker $faker) {
    $cpfs = [];
    $phones = [];

    do {
        $cpf = rand(11111111111, 99999999999);
    } while(in_array($cpf, $cpfs));

    array_push($cpfs, $cpf);

    do {
        $phone = rand(11111111111, 99999999999);
    } while(in_array($phone, $phones));

    array_push($phones, $phone);

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'cpf' => $cpf,
        'phone' => $phone,
    ];
});
