<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    //
    public function jobpost()
    {
        //many jobs may be of one type
        return $this->hasMany('busara\Models\JobPost','job_type_id');
    }
}
