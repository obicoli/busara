<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function user()
    {
    	//many companies can owned by one user/employer
        return $this->belongsTo('busara\User',' user_id');
    }

    public function deals()
    {
        return $this->belongsTo('busara\Models\BusinessType');
    }

    public function jobpost()
    {
        //company can post many JobPost
        return $this->hasMany('busara\Models\JobPost','company_id');
    }

}
