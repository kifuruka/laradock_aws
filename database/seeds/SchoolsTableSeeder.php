<?php

use Illuminate\Database\Seeder;
use App\School;

class SchoolsTableSeeder extends Seeder
{

    public function run()
    {
        // factory(App\School::class, 30)->create();
        
        // DB::table('schools')->insert([            
        //     'school_name' =>'東海大学',
        //     'activity_count'=> 10,
        //     'school_img' =>'https://www.kindai.ac.jp/img/ogimg/ogp.jpg'
        // ]);

        $json = File::get("database/json/school_table.json");
        $data = json_decode($json);
 
        foreach($data as $obj) {
            School::create(array(
                "school_name"=> $obj->school_name,
                "activity_count"=> $obj->activity_count,
                "top_contents"=> $obj->top_contents,
                "sub_title1"=> $obj->sub_title1,
                "sub_image1"=> $obj->sub_image1,
                "sub_contents1"=> $obj->sub_contents1,
                "sub_title2"=> $obj->sub_title2,
                "sub_image2"=> $obj->sub_image2,
                "sub_contents2"=> $obj->sub_contents2,
                "sub_title3"=> $obj->sub_title3,
                "sub_image3"=> $obj->sub_image3,
                "sub_contents3"=> $obj->sub_contents3,
                "url"=> $obj->url,
                "school_logo"=> $obj->school_logo,
                "school_img"=> $obj->school_img,
            ));
        }
    }
}