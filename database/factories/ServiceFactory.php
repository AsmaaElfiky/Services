<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Models\Service::class,
    function (Faker $faker) {
        static $id = 1,
        $order = 1;
        return [
            'id' => $id++,
            'user_id'=>'1',
            'name' => $faker->name,
            'image' => 'services/400.jpg',
            'order' => $order++,
            'category_id' => $faker->biasedNumberBetween($min = 1, $max = 3, $function = 'sqrt'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ];
    }
);
