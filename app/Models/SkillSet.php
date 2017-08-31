<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class SkillSet extends Model
{
    //

    public function employee(){
        return $this->hasMany('busara\Models\Employee','skill_set_id');
    }

    public function employeeskills()
    {
        //one user can own many companies
        return $this->hasMany('busara\Models\EmployeeSkillSet','skill_sets_id');
    }

    public function skillsetdata()
    {
        //one user can own many companies
        return $this->hasMany('busara\Models\SkillSetDetails','skill_set_id');
    }

    public function jobpostskillset(){
        return $this->hasMany('busara\Models\JobPostSkillSet','skill_set_id');
    }

    public function jobpost()
    {
        //one user can own many companies
        return $this->hasMany('busara\Models\JobPost','skill_set_id');
    }
}
