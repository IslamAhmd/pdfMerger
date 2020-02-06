<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $guarded = [];

    protected $hidden = ['pivot'];

    public function orders(){
    	return $this->belongsToMany('App\Order', 'level_orders');
    }

    public function years(){
    	return $this->belongsToMany('App\Year', 'year_levels');
    }
}
