<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Dog::class, function (Faker $faker) {

    $breeds = array(
        'Airedale Terrier',
        'Akbash',
        'Alpine Spaniel',
        'American Bully',
        'Bulldog',
        'Cocker Spaniel'
    );

    $colors = array(
        'Brown', 
        'Red',
        'Yellow'
    );

    $countries = array(
        'Ukraine',
        'Russia',
        'USA',
        'Austria'
    );

    $photos = array(
        'photolink1',
        'photolink2',
        'photolink3'
    );

    return [
        'name' => $faker->firstname,
        'age' => $faker->numberBetween(1,15),
        'breed' => $breeds[rand(0, sizeof($breeds)-1)],
        'color' => $colors[rand(0, sizeof($colors)-1)],
        'origin' => $countries[rand(0, sizeof($countries)-1)],
        'description' => $faker->text,
        'photo' => $photos[rand(0, sizeof($photos)-1)]
    ];
});
