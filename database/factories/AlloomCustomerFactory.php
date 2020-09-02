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

    $company_size = [
        "1-5", "5-25", "25+"
    ];

    $company_size_index = array_rand($company_size);

    return [
        'name' => $faker->name,
        'company_name' => $faker->unique()->company,
        'url_prefix' =>  $faker->unique()->company,
        'company_size' =>   $company_size[$company_size_index],
        'email' => $faker->unique()->email,
        'cpf' => $cpf,
        'phone' => $phone,
    ];
});
