<?php

namespace busara\Repositories;

use DB;
use busara\User;
use busara\Models\Role;

class UserRepository extends BaseRepository
{
    /**
     * The Role instance.
     *
     * @var \App\Models\Role
     */
    protected $role;

    /**
     * Create a new UserRepository instance.
     *
     * @param  \App\Models\User $user
     * @param  \App\Models\Role $role
     * @return void
     */
    public function __construct(User $user, Role $role)
    {
        $this->model = $user;
        $this->role = $role;
    }

    public function getUserById($id){
        return $this->model->where('id',$id)->first();
    }

    /**
     * Save the User.
     *
     * @param  \App\Models\User $user
     * @param  array  $inputs
     * @return void
     */
    protected function save($user, $inputs)
    {
        if (isset($inputs['seen'])) {
            $user->seen = 'true';
        }elseif(isset($inputs['switch_to'])){
            $user->role_id = $inputs['switch_to'];
        }else {
            $user->name = $inputs['name'];
            $user->email = $inputs['email'];
            $user->phone = $inputs['phone'];
            $user->email = $inputs['email'];
            $user->sms_notification_active = false;

            if (isset($inputs['role'])) {
                $user->role_id = $inputs['role'];
            } else {
                $role_user = $this->role->where('role_name','User')->first();
                $user->role_id = $role_user->id;
            }
        }
        $user->save();
    }

    /**
     * Get users collection paginate.
     *
     * @param  int  $n
     * @param  string  $role
     * @return \Illuminate\Support\Collection
     */
    public function getUsersWithRole($n, $role)
    {
        $query = $this->model->with('role')->oldest('seen')->latest();

        if ($role != 'total') {
            $query->whereHas('role', function ($q) use ($role) {
                $q->whereSlug($role);
            });
        }

        return $query->paginate($n);
    }

    /**
     * Count the users for a role.
     *
     * @param  string  $role
     * @return int
     */
    public function count($role = null)
    {
        if ($role) {
            return $this->model
                ->whereHas('role', function ($q) use ($role) {
                    $q->whereSlug($role);
                })->count();
        }

        return $this->model->count();
    }

    /**
     * Counts the users.
     *
     * @param  string  $role
     * @return int
     */
    public function counts()
    {
        $counts = [
            'admin' => $this->count('admin'),
            'redac' => $this->count('redac'),
            'user' => $this->count('user')
        ];

        $counts['total'] = array_sum($counts);
        return $counts;
    }

    /**
     * Create a user.
     *
     * @param  array  $inputs
     * @param  int    $confirmation_code
     * @return \App\Models\User
     */
    public function store($inputs, $confirmation_code = null,$validphone)
    {
        $this->model->password = bcrypt($inputs['password']);

        if ($confirmation_code) {
            $this->model->confirmation_code = $confirmation_code;
        } else {
            // $this->model->confirmed = true;
        }

        $this->model->phone = $validphone;

        $this->save($this->model, $inputs);

        return $this->model;
    }

    /**
     * Update a user.
     *
     * @param  array  $inputs
     * @param  \App\Models\User $user
     * @return void
     */
    public function update($inputs, $user)
    {
        $user->confirmed = isset($inputs['confirmed']);

        $this->save($user, $inputs);
    }

    public function switchTo($inputs, $id){
        
        if ( $this->role->where('id',$inputs['switch_to'])->first()->role_name == 'Administrator' ) {
            return false;
        }
        $user = $this->model->all()->where('id',$id)->first();
        $this->save($user, $inputs);

        if ($user) {
            return $user;
        }else{
            return false;
        }

    }

    /**
     * Valid user.
     *
     * @param  bool  $valid
     * @param  int   $id
     * @return void
     */
    public function valid($valid, $id)
    {
        $user = $this->getById($id);

        $user->valid = $valid == 'true';

        $user->save();
    }

    /**
     * Destroy a user.
     *
     * @param  \App\Models\User $user
     * @return void
     */
    public function destroyUser(User $user)
    {
        $user->comments()->delete();

        $user->posts()->delete();
        
        $user->delete();
    }

    /**
     * Confirm a user.
     *
     * @param  string  $confirmation_code
     * @return \App\Models\User
     */
    public function confirm($confirmation_code,$sms_code)
    {
        //$user = $this->model->whereConfirmationCode($confirmation_code)->firstOrFail();
        $user = $this->model->where('confirmation_code',$confirmation_code)->firstOrFail();
        $user->email_confirmed = true;
        $user->confirmation_code = $sms_code;
        $user->save();
        return $user;
    }

    public function phone($confirmation_code)
    {
        //$user = $this->model->whereConfirmationCode($confirmation_code)->firstOrFail();
        $user = $this->model->where('confirmation_code',$confirmation_code)->firstOrFail();
        $user->phone_confirmed = true;
        $user->confirmation_code = null;
        $user->save();

        return $user;
    }

    /**
     * Get report of blog authors
     *
     * @return Illuminate\Support\Collection
     */
    public function getBlogAuthorReport()
    {
        return $this->model
            ->has('posts')
            ->withCount('posts')
            ->with(['posts' => function ($query) {
                $query->latest();
            }])
            ->get();
    }
}
