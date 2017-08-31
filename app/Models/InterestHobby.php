<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class InterestHobby extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('busara\User');
    }
}
