<?php

namespace busara\Repositories;

use busara\Models\Company;
use busara\Models\JobType;
use busara\Models\JobPost;
use busara\Models\JobLocation;
use busara\Models\JobSkillSetDetails;
use busara\Models\SkillSet;
use busara\Models\SkillSetDetails;
use busara\Models\JobPostSkillSet;



use Auth;

class CompanyRepository
{
    /**
     * The Role instance.
     *
     * @var \App\Models\Role
     */
    protected $company;
    protected $jobtype;
    protected $jobpost;
    protected $joblocation;
    protected $skillset;
    protected $skillsetdetails;
    protected $jobpostskillset;
    protected $jobpostskillsetdetails;


    /**
     * Create a new RolegRepository instance.
     *
     * @param  \App\Models\Role $role
     * @return void
     */
    public function __construct(Company $company,JobType $jobtype, JobPost $jobpost,JobLocation $joblocation,SkillSet $skillset, SkillSetDetails $skillsetdetails, JobPostSkillSet $jobpostskillset,JobSkillSetDetails $jobpostskillsetdetails)
    {
        $this->company = $company; //company model
        $this->jobtype = $jobtype; //
        $this->jobpost = $jobpost;
        $this->joblocation = $joblocation;
        $this->skillset = $skillset;
        $this->skillsetdetails = $skillsetdetails;
        $this->jobpostskillset = $jobpostskillset;
        $this->jobpostskillsetdetails = $jobpostskillsetdetails;
    }

    //HERE STARTS SKILLSET DATA
    public function getSkillData($id){
        return $this->skillsetdetails->all()->where('skill_set_id',$id);
    }







    //here starts jobpost
    public function saveJobPost($jobpost, $inputs){

        if (isset($inputs['progress1'])) {



            $jobpost->title = $inputs['title'];
            $jobpost->company_id = $inputs['company'];
            $jobpost->salary = $inputs['salary'];
            if ($inputs['radio_salary'] != '') {
                $jobpost->salary = 'Negotiable';
            }
            $jobpost->job_type_id = $inputs['job_type'];
            $jobpost->experience = $inputs['experience'];
            $jobpost->due_date = $inputs['due_date'];
            $jobpost->description = $inputs['description'];
            $jobpost->post_status = 30;
            $jobpost->save();
            return 'Successful saved, Step 1 of 5';

        }elseif (isset($inputs['progress2'])) {
            $jobpost->save();
            return 'Successful saved, Step 2 of 5';
        }elseif (isset($inputs['progress3'])) {
            $jobpost->save();
            return 'Successful saved, Step 3 of 5';
        }elseif (isset($inputs['progress4'])) {
            $jobpost->save();
            return 'Successful saved, Step 4 of 5';
        }elseif (isset($inputs['progress5'])) {
            $jobpost->save();
            return 'Completed';
        }
        
    }
    public function storeJobPost($inputs, $user_id, $skillsetdata){
        if (isset($inputs['job_id'])) {
            $jobpost = $this->jobpost->all()->where('id',$inputs['job_id'])->first();
            if($jobpost->post_status==30){
                //we want to save job location
                $joblocation = $this->saveJobLocation($this->joblocation,$inputs);
                //then update job location and post status
                $jobpost->post_status = $jobpost->post_status + 25;
                $jobpost->job_location_id = $joblocation->id;

            }elseif($jobpost->post_status == 55){
                //want to save responsibilities and Requirement
                $jobpost->post_status = $jobpost->post_status + 15;
                $jobpost->responsibility = $inputs['responsibility'];
                $jobpost->requirements = $inputs['requirements'];

            }elseif ($jobpost->post_status == 70) {

                //save job skill set
                $this->jobpostskillset->skill_set_id = $inputs['skillset'];
                $this->jobpostskillset->job_post_id = $inputs['job_id'];
                $this->jobpostskillset->save();
                //check if skill set details are availed and save them
                if ( sizeof($skillsetdata) > 0) {
                    //$this->jobpostskillsetdetails
                    for ($i=0; $i < sizeof($skillsetdata); $i++) { 
                        $datatosave = new JobSkillSetDetails();
                        $datatosave->job_post_id = $inputs['job_id'];
                        $datatosave->skill_set_details_id = $skillsetdata[$i];
                        $datatosave->save();

                    }
                }
                $jobpost->post_status = $jobpost->post_status + 15;
                $jobpost->skill_set_id = $inputs['skillset'];

                //$jobpost->
                //$jobpost->post_status = $jobpost->post_status + 25;
            }elseif ($jobpost->post_status == 85) {
                $jobpost->post_status = $jobpost->post_status + 15;
                $jobpost->how_to_apply = $inputs['how_to_apply'];
            }
        }else{
            $jobpost = $this->jobpost;
            $jobpost->user_id = $user_id;
        }

        

        return $this->saveJobPost($jobpost, $inputs);
        //return $jobpost;
    }
    public function getJobPost($user_id){
        return $this->jobpost->all()
        ->where('user_id',$user_id)
        ->where('post_status','<',100)
        ->where('job_status','=',1)
        ->first();
    }

    public function getJobPostBy($id){
        return $this->jobpost->all()
        ->where('id',$id)
        ->first();
    }

    public function getAllJobsy($user_id){
        return $this->jobpost->all()
        ->where('user_id',$user_id)
        ->where('post_status','=',100)
        ->where('job_status','=',1);
    }

    public function getAllJobsPosted(){
        return $this->jobpost->all()
        ->where('post_status','=',100)
        ->where('job_status','=',1);
    }





    //HERE STARTS JOB LOCATION
    public function saveJobLocation($joblocation,$inputs){
        $joblocation->street_addres = $inputs['street'];
        $joblocation->country = $inputs['country'];
        $joblocation->zip = $inputs['zip'];
        $joblocation->state = $inputs['state'];
        $joblocation->city = $inputs['city'];
        $joblocation->save();
        return $joblocation;
    }





    //HERE STARTS SKILLSETS
    public function getAllSkillSets(){
        return $this->skillset->all();
    }





    /**
     * Get all roles.
     *
     * @return \Illuminate\Support\Collection
     */
    public function all()
    {
        return $this->company->all();
    }
    public function allByUser($user_id)
    {
        return $this->company->all()->where('user_id',$user_id);
    }


    public function getAllJobs(){
        return $this->jobtype->all();
    }

    public function getFirst($user_id){
        return $this->company->all()->where('user_id',$user_id)->first();
    }

    protected function save($company, $inputs)
    {
        if ($inputs['action'] == 'logo') {
            $company->save();
            return $company;
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
        $company->save();
    }

    public function store($inputs, $url=null,$user_id)
    {

        if ($inputs['id'] != 0) {
            $company = $this->company->all()->where('id',$inputs['id'])->first();
            //$company->profile_completion = 10;
            $company->user_id = $user_id;
        }else{
            $company = $this->company;
            $company->profile_completion = 10;
            $company->user_id = $user_id;
        }

        if ($inputs['action'] == 'logo' && $url != null) {
            $company->logo = $url;
        }elseif($inputs['action'] == 'details'){
            $company->profile_completion = $company->profile_completion + 50;
            $company->name = $inputs['name'];
            $company->established_on = $inputs['established_on'];
            $company->deals_id = $inputs['type'];
            $company->total_people = $inputs['people'];
            $company->website = $inputs['website'];
            $company->address = $inputs['address'];
            $company->city = $inputs['city'];
            $company->state = $inputs['state'];
            $company->street = $inputs['street'];
            $company->zip = $inputs['zip'];
            $company->country = $inputs['country'];
            $company->phone = $inputs['phone'];
        }elseif($inputs['action'] == 'details2'){

            $company->description = $inputs['background'];
            $company->services = $inputs['services'];
            $company->expertise = $inputs['expertice'];
            $company->profile_completion = $company->profile_completion + 25;

        }elseif($inputs['action'] == 'social'){
            $company->profile_completion = $company->profile_completion + 15;
        }

        $company->user_id = $user_id;

        //$this->model->phone = $validphone;
        $this->save($company, $inputs);

        return $this->company;
    }

    /**
     * Get companys collection.
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
            $company = $this->company->whereSlug($key)->firstOrFail();
            $company->title = $value;
            $company->save();
        }
    }
}
