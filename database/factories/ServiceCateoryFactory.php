<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Models\ServiceCategory::class,
    function (Faker $faker) {
        static $id = 1;
        return [
            'id' => $id++,
            'category_name' => $faker->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()



        ];
    }
);
