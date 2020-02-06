<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $guarded = [];

    public function subject(){
    	return $this->belongsTo('App\Subject');
    }

    public function year(){
    	return $this->belongsTo('App\Year')->with('levels');
    }
}
