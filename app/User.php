<?php

namespace busara;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('busara\Models\Role','role_id');
    }

    public function logs(){
        return $this->hasMany('busara\Models\UserLog');
    }

    public function company()
    {
        //one user can own many companies
        return $this->hasMany('busara\Models\Company','user_id');
    }

    public function profile()
    {
        //user has only one profile
        return $this->hasOne('busara\Models\Employee','user_id');
    }

    public function education()
    {
        //one user can own many companies
        return $this->hasMany('busara\Models\Educational');
    }

    public function experience()
    {
        //one user can own many companies
        return $this->hasMany('busara\Models\Experience');
    }

    public function interests()
    {
        //one user can own many companies
        return $this->hasMany('busara\Models\InterestHobby');
    }

    public function referies()
    {
        //one user can own many companies
        return $this->hasMany('busara\Models\Referies');
    }

    public function language()
    {
        //one user can own many companies
        return $this->hasMany('busara\Models\SpokenLanguage');
    }

    public function jobpost()
    {
        //one user can own many companies
        return $this->hasMany('busara\Models\JobPost');
    }


}
