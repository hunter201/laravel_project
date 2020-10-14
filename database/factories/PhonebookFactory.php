<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phonebook;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(Phonebook::class, function (Faker $faker) {
    return [
        'name'=> Str::random(),
        'email'=>Str::random(10).'@aril.ru',
        'phone'=>Str::random(7),
        'created_at'=>$faker->dateTime(),
        'updated_at'=>$faker->dateTime(),
    ];
});
