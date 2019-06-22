<?php

use Illuminate\Database\Seeder;

class ServiceCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory('App\Models\ServiceCategory', 30)->create();
    }
}
