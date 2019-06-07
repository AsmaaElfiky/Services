<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([[
            'id' => 1,
            'name' => 'Service 1',
            'image' => '/images/400.jpg',
            'order' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 2,
            'name' => 'Service 2',
            'image' => '/images/400.jpg',
            'order' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 3,
            'name' => 'Service 3',
            'image' => '/images/400.jpg',
            'order' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]]);
    }
}
