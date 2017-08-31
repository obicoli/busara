<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class SkillSetDetails extends Model
{
    //
    public function skillset(){
        return $this->belongsTo('busara\Models\SkillSet');
    }

    public function jobskillsetdetails(){
    	return $this->hasMany('busara\Models\JobSkillSetDetails','skill_set_details_id');
    }
}
