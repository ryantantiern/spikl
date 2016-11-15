<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = 'universities';
    public $timestamps = false;

    public function users() 
    {
    	return $this->hasMany('App\Models\User', 'university_id', 'id');
    }

}
