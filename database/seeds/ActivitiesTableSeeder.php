<?php

use Illuminate\Database\Seeder;
use App\Activity;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //    factory(App\Activity::class, 30)->create();


        // DB::table("activities")->delete();
    //    $url = "../json/activity_table.json";
    //    $json = '../json/activity_table.json';
    
    //    $json = file_get_contents($url);

    //    $list = [];
    //    $now = Carbon::now();

       $json = File::get("database/json/activity_table.json");
       $data = json_decode($json);

       foreach($data as $obj) {
        Activity::create(array(
            "school_id" => $obj->school_id,
            "activity_name" => $obj->activity_name,
            "title" => $obj->title,
            "top_contents" => $obj->top_contents,
            "total_donation" => $obj->total_donation,
            "fans" => $obj->fans,
            "zanday" => $obj->zanday,
            "sub_title1" => $obj->sub_title1,
            "sub_image1" => $obj->sub_image1,
            "sub_contents1" => $obj->sub_contents1,
            "sub_title2" => $obj->sub_title2,
            "sub_image2" => $obj->sub_image2,
            "sub_contents2" => $obj->sub_contents2,
            "sub_title3" => $obj->sub_title3,
            "sub_image3" => $obj->sub_image3,
            "sub_contents3" => $obj->sub_contents3,
            "activity_img" => $obj->activity_img,
        ));
       }
    //    DB::table("m_category")->insert($list);
    }
}
