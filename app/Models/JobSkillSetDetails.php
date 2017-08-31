<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class JobSkillSetDetails extends Model
{
    //
    public function skillsetdetails(){
    	return $this->belongsTo('busara\Models\SkillSetDetails','skill_set_details_id');
    }

    public function joblocation()
    {
        return $this->belongsTo('busara\Models\JobPost','job_post_id');
    }
}
