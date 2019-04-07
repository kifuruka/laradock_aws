<?php

use Illuminate\Database\Seeder;

class UserDitailsTableSeeder extends Seeder
{
    

    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        factory(App\UserDetail::class,10)->create();
    }
}
