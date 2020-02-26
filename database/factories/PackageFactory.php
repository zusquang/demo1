<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Package;
use App\Models\PackageDetail;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Package::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'tracking_number' => $faker->unique()->safeEmail,
        'received_at' => $faker->dateTime
    ];
});


$factory->define(PackageDetail::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->numberBetween(0, 99),
        'quantity' => $faker->numberBetween(0, 99),
        'weight' => $faker->numberBetween(0, 99),
    ];
});
