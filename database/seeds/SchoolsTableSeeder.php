<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\School::class, 30)->create();
        
        // DB::table('schools')->insert([            
        //     'school_name' =>'東海大学',
        //     'activity_count'=> 10,
        //     'school_img' =>'https://www.kindai.ac.jp/img/ogimg/ogp.jpg'
        // ]);
        
    }
}