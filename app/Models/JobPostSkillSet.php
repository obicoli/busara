<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class JobPostSkillSet extends Model
{
    //
    public function jobpost()
    {
        return $this->belongsTo('busara\Models\JobPost','job_post_id');
    }

    public function skillset(){
    	return $this->belongsTo('busara\Models\SkillSet','skill_set_id');
    }
}
