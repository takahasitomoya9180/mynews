<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $guarded = array('id');
    
    //
    public static $rules = array(
        'name' =>'required',
        'gender' =>'required',
        'hobby' =>'required',
        'introduction' =>'required',
        );
        
        //以下を追記
        //Profileモデルに紐づける
        public function histories()
        {
            return $this->hasMany('App\ProfileHistory');
        }
}
