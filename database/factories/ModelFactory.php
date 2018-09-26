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
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});


$factory->define(App\cas_chamados::class, function ($faker) {
    return [
        'id_chamado' => $faker->id_chamado,
        'n_chamado' => $faker->n_chamado,
        'id_categoria_3' => $faker->id_categoria_3,
        'id_categoria_4' => $faker->id_categoria_4,
        'outros' => $faker->outros
    ];
});


$factory->define(App\cas_categoria_3::class, function ($faker) {
    return [
        'id_categoria_3' => $faker->id_categoria_3,
        'categoria_3' => $faker->categoria_3
    ];
});
