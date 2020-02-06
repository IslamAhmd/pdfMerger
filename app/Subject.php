<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded = [];

    public function year(){
    	return $this->belongsTo('App\Year');
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
