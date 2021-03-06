<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(Users::class);
         $this->call(ServiceCategory::class);
         $this->call(Services::class);
         $this->call(RolesAndPermissionsSeeder::class);
    }
}
