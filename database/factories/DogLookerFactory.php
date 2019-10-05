<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\DogLooker;

$factory->define(DogLooker::class, function (Faker $faker) {

  $photos = [
    'photoslink1'
  ];

  return [
      'biography' => $faker->text,
      'photo' => $photos[rand(0, sizeof($photos)-1)]
  ];
});
