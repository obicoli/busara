<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    //
    public function company()
    {
        return $this->hasMany('busara\Models\Company','deals_id');
    }
}
