<?php

namespace busara\Repositories;

use busara\Models\Role;
use busara\Models\Employee;

use Auth;

class RoleRepository
{
    /**
     * The Role instance.
     *
     * @var \App\Models\Role
     */
    protected $role;
    protected $employee;

    /**
     * Create a new RolegRepository instance.
     *
     * @param  \App\Models\Role $role
     * @return void
     */
    public function __construct(Role $role,Employee $employee)
    {
        $this->role = $role;
        $this->employee = $employee;
    }

    //here starts employee
    public function getEmployeeProfile($user_id){
        return $this->employee->all()->where('user_id',$user_id)->first();
    }
    public function saveEmployee($employee, $inputs){

        if (isset($inputs['biodata'])) {



            $employee->sir_name = $inputs['sir_name'];
            $employee->first_name = $inputs['first_name'];
            $employee->last_name = $inputs['last_name'];
            $employee->gender = $inputs['gender'];
            $employee->phone = $inputs['phone'];
            $employee->more_about_you = $inputs['more_about_you'];
            //$employee->description = $inputs['description'];
            $employee->profile_completion = $employee->profile_completion + 8;
            $employee->save();
            return 'Successful saved, Step 2 of 8';

        }elseif (isset($inputs['progress2'])) {
            $employee->save();
            return 'Successful saved, Step 2 of 5';
        }elseif (isset($inputs['progress3'])) {
            $employee->save();
            return 'Successful saved, Step 3 of 5';
        }elseif (isset($inputs['progress4'])) {
            $employee->save();
            return 'Successful saved, Step 4 of 5';
        }elseif (isset($inputs['progress5'])) {
            $employee->save();
            return 'Completed';
        }else{
            $employee->save();
            return 'Successful saved, Step 1 of 8';
        }
        
    }
    public function storeEmployee($inputs, $url, $user_id){
        if (isset($inputs['cv_id'])){
            $employee = $this->employee->all()->where('id',$inputs['cv_id'])->first();
            return $this->saveEmployee($employee,$inputs);

        }else{
            $employee = $this->employee;
            $employee->profile_photo = $url;
            $employee->user_id = $user_id;
            $employee->profile_completion = 7;
            return $this->saveEmployee($employee,$inputs);
        }


    }










    /**
     * Get all roles.
     *
     * @return \Illuminate\Support\Collection
     */
    public function all()
    {
        return $this->role->all();
    }

    public function getSwitchRoles(){
        return $this->role->where('id', '!=' , Auth::user()->role_id)
                    ->where('role_name', '!=' , 'User')
                    ->where('role_name', '!=' , 'Administrator')
                        ->get();
    }

    /**
     * Get roles collection.
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
            $role = $this->role->whereSlug($key)->firstOrFail();
            $role->title = $value;
            $role->save();
        }
    }
}
