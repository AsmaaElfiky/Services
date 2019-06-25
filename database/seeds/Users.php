<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'image' => 'images/400.jpg',
            'name' => 'Asmaa',
            'email' => 'admin@admin.com',
            'password' => bcrypt('0123456789'),
            'remember_token' => str_random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
