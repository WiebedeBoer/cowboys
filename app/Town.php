<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    //towns table
    protected $table = 'towns';
    protected $primaryKey = 'town_id';
	
	//buildings
    public function buildings()
    {
        return $this->hasMany('App\Building','building_id');
    }
}
