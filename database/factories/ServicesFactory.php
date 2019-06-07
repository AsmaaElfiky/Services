<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Models\Service::class, function (Faker $faker) {
    static $order = 1;
    return [
        'name' => $faker->name,
        'image' => '/images/400.jpg',
        'order' => $order++,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ];
});
