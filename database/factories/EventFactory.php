<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;


$factory->define(Event::class, function (Faker $faker) {
    return [
        'id_squad' => $faker->unique()->numberBetween(1,10),
        'nama_event' => $faker->sentence(3,true),
        'slug' => Str::slug($faker->sentence()),
        'total_pertandingan' => rand(1,3),
        'peraturan' => $faker->paragraph,
        'total_point' => rand(0,200),
    ];
});
