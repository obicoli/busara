<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class JobLocation extends Model
{
    //
    public function jobpost()
    {
        //one location may have many jobpost
        return $this->hasMany('busara\Models\JobPost','job_location_id');
    }
}
