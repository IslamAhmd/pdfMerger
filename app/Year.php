<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $guarded = [];

    protected $hidden = ['pivot'];

    public function subjects(){
    	return $this->hasMany('App\Subject');
    }

    public function levels(){
    	return $this->belongsToMany('App\Level', 'year_levels');
    }
}
