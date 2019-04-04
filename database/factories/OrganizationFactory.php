<?php

use Faker\Generator as Faker;

$factory->define(App\Organization::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address ,
         'description' => $faker->text($maxNbChars = 200)  ,
         'category' => 'hospital',
         'rating' => 5,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'filename' => "abc",
         'role' => 2,
         'status' => 1,
       // 'remember_token' => Str::random(10),
    ];
});
