<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use App\Models\BookStatus;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'status_id' => $faker->randomElement(BookStatus::all()->pluck('id')->toArray()),
        'name' => $faker->word
    ];
});
