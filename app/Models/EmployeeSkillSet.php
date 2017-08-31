<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeSkillSet extends Model
{
    //
    public function skillset()
	{
		//employee profile can only be managed by a single user
    	return $this->belongsTo('busara\SkillSet');
	}
}
