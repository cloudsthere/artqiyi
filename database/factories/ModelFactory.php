<?php

use Artqiyi\Models\WareImageModel;
use Artqiyi\Models\WareModel;

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

$factory->define(Artqiyi\Models\UserModel::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});


$factory->define(WareModel::class, function ($faker) {
    return [
        'ware_name' => $faker->name,
        'price' => $faker->randomFloat(2, 1000, 10),
        'description' => $faker->paragraph(),
    ];
});


$factory->define(WareImageModel::class, function ($faker) {
    return [ 
        'url' => $faker->imageUrl(),
    ];
});




