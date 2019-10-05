<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
       'name' => $faker->name, 
       'address' => $faker->address,
       'phone' => $faker->phoneNumber,
       'username' => $faker->username,
       'password' => '123456789'
    ];
});
