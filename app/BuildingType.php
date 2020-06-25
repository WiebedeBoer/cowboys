<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuildingType extends Model
{
    //towns table
    protected $table = 'building_types';
    protected $primaryKey = 'building_type_id';
	
	//buildings
    public function buildings()
    {
        return $this->hasMany('App\Building','building_id');
    }
}
