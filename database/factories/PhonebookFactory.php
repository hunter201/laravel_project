<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phonebook;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
$factory->define(Phonebook::class, function () {
    
    $faker = Faker::create('ru_RU');
    return [
        'name'=> $faker->name('male'),
        'email'=>Str::random(10).'@aril.ru',
        'phone'=>Str::random(7),
        'created_at'=>$faker->dateTimeBetween("-3 months","-1 months"),
        'updated_at'=>$faker->dateTimeBetween("-7 days","now"),
    ];
});
