<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Interest;

$factory->define(Interest::class, function (Faker $faker) {
    return [
        'status' => 0
    ];
});
