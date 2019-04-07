<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table ="activities";
    
    public function school(){
        return $this -> belongsTo('\App\School');
    }
     // fill()に入れるデータをここで指定している
     protected $fillable = [
        
        'activitie_name' ,
        'top_contents',
        'url',
        'activitie_img', 
        'total_donation',
        'fans',
    ];
}