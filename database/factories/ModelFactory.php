<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    $role = ['first_class', 'final_class'];
    return [
        'username' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'role' => $role[rand(0,1)],
        
    ];
});


$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(3),
        'user_id' => 1,
        'content' => $faker->sentences(10, true),
        'date' => $faker->dateTimeThisMonth->format('Y-m-d H:i:s'),
        'status' => rand(0,1),
    ];
});