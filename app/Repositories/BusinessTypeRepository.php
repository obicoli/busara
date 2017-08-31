<?php

namespace busara\Repositories;

use busara\Models\BusinessType;
use Auth;

class BusinessTypeRepository
{
    /**
     * The Role instance.
     *
     * @var \App\Models\Role
     */
    protected $businessType;

    /**
     * Create a new RolegRepository instance.
     *
     * @param  \App\Models\Role $role
     * @return void
     */
    public function __construct(BusinessType $businessType)
    {
        $this->businessType = $businessType;
    }

    /**
     * Get all roles.
     *
     * @return \Illuminate\Support\Collection
     */
    public function all()
    {
        return $this->businessType->all();
    }

    public function getFirst($user_id){
        return $this->businessType->all()->where('user_id',$user_id)->first();
    }

    protected function save($businessType, $inputs)
    {
        if ($inputs['action'] == 'logo') {
            $businessType->save();
            return $businessType;
        }
        // if (isset($inputs['seen'])) {
        //     $user->seen = 'true';
        // }elseif(isset($inputs['switch_to'])){
        //     $user->role_id = $inputs['switch_to'];
        // }else {
        //     $user->name = $inputs['name'];
        //     $user->email = $inputs['email'];
        //     $user->phone = $inputs['phone'];
        //     $user->email = $inputs['email'];
        //     $user->sms_notification_active = false;

        //     if (isset($inputs['role'])) {
        //         $user->role_id = $inputs['role'];
        //     } else {
        //         $role_user = $this->role->where('name','User')->first();
        //         $user->role_id = $role_user->id;
        //     }
        // }
        $businessType->save();
    }

    public function store($inputs, $url=null,$user_id)
    {

        if ($inputs['id'] != 0) {
            $businessType = $this->businessType->all()->where('id',$inputs->id)->first();
            //$businessType->profile_completion = 10;
            $businessType->user_id = $user_id;
        }else{
            $businessType = $this->businessType;
            $businessType->profile_completion = 10;
            $businessType->user_id = $user_id;
        }

        if ($inputs['action'] == 'logo' && $url != null) {
            $businessType->logo = $url;
        }

        $businessType->user_id = $user_id;

        //$this->model->phone = $validphone;
        $this->save($businessType, $inputs);

        return $this->businessType;
    }

    /**
     * Get businessTypes collection.
     *
     * @return Array
     */
    public function allSelect()
    {
        $select = $this->all()->pluck('title', 'id');

        return compact('select');
    }

    /**
     * Update roles.
     *
     * @param  array  $inputs
     * @return void
     */
    public function update($inputs)
    {
        foreach ($inputs as $key => $value) {
            $businessType = $this->businessType->whereSlug($key)->firstOrFail();
            $businessType->title = $value;
            $businessType->save();
        }
    }
}
