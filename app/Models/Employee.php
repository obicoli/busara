<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    public function user()
	{
		//employee profile can only be managed by a single user
    	return $this->belongsTo('busara\User');
	}

	public function skillset(){
		return $this->belongsTo('busara\Models\SkillSet','skill_set_id');
	}
}
