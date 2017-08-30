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

// $factory->define(App\Entities\Usuario::class, function(\Faker\Generator $faker) {
//     static $password;

//     return [
//         'nome' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => $password ?: $password = bcrypt('secret'),
//         'remember_token' => str_random(10),
//     ];
// });

$factory->define(App\Entities\Usuario::class, function(\Faker\Generator $faker) {
    static $password;

    return [
        'nome' => 'admin',
        'email' => 'admin@admin.com',
        'password' => $password ?: $password = bcrypt('sinergia'),
        'remember_token' => str_random(10),
    ];
});
