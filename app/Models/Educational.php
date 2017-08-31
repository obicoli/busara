<?php

namespace busara\Models;

use Illuminate\Database\Eloquent\Model;

class Educational extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('busara\User');
    }

}
