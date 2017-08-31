<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    //
    public function role(){
        return $this->belongsTo('busara\User','user_id');
    }

    public function jobpost()
    {
        return $this->belongsTo('busara\Models\JobPost');
    }
}
