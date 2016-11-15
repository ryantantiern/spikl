<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universitiy extends Model
{
    protected $table = 'universities';
    public $timestamps = false;

    public function user() 
    {
    	return $this->hasMany('App\Models\User', 'university_id', 'id');
    }

}
