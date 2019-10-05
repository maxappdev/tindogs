<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\shelter_has_dogs::class, function (Faker $faker) {

    $random_dog_id = App\Dog::all()->random(1)->pluck('id');

    return [
        'dog_id' => $random_dog_id[0]
    ];
});
