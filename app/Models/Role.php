<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function user(){
    	return $this->hasMany('busara\User','role_id');
    }
}
