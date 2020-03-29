<?php

use Faker\Generator as Faker;

$factory->define(App\catogary::class, function (Faker $faker){
  return[
    'catogary_name' => $faker->sentence   
  ];
});