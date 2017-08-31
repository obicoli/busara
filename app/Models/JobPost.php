<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('busara\User');
    }

    public function company()
    {
        return $this->belongsTo('busara\Models\Company','company_id');
    }

    public function jobtype()
    {
        return $this->belongsTo('busara\Models\JobType','job_type_id');
    }

    public function joblocation()
    {
        return $this->belongsTo('busara\Models\JobLocation','job_location_id');
    }

    public function jobpost()
    {
        return $this->belongsTo('busara\Models\SkillSet','skill_set_id');
    }

    public function userlogs()
    {
        //one user can own many companies
        return $this->hasMany('busara\Models\UserLog','job_id');
    }

    public function jobpostskillset()
    {
        //one user can own many companies
        return $this->hasMany('busara\Models\JobPostSkillSet',' job_post_id');
    }

    public function jobskillsetdetails()
    {
        //one user can own many companies
        return $this->hasMany('busara\Models\JobSkillSetDetails','job_post_id');
    }

}
