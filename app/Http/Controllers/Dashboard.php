<?php

namespace busara\Http\Controllers;

use Illuminate\Http\Request;
use busara\Repositories\UserRepository;
use busara\Repositories\RoleRepository;
use busara\Repositories\CompanyRepository;
use busara\Repositories\GeneralRepository;
use busara\Repositories\BusinessTypeRepository;
use Illuminate\Support\Facades\Input;
use Auth;

//Database: collinsf_busara
//Username: collinsf_busara
//Password: 12busaraAK

class Dashboard extends Controller
{

    protected $userRepository;
    protected $roleRepository;
    protected $companyRepository;
    protected $generalRepository;
    protected $businessTypeRepository;

    public function __construct(UserRepository $userRepository,RoleRepository $roleRepository,CompanyRepository $companyRepository,GeneralRepository $generalRepository,BusinessTypeRepository $businessTypeRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
        $this->companyRepository = $companyRepository;
        $this->generalRepository = $generalRepository;
        $this->businessTypeRepository = $businessTypeRepository;
        //$this->middleware('auth');
        $this->middleware('checkguest');
    }

    public function user(){
        
    }

    public function loadSkillData($id){

        $message = $this->companyRepository->getSkillData($id);
        $results['status'] = 'success';
        $results['message'] = $message;
        return $results;
    }

    public function myjobs(){
        $user_id = Auth::user()->id;
        $user = $this->userRepository->getUserById(Auth::user()->id);
        //$roles = $this->roleRepository->all();
        $roles = $this->roleRepository->getSwitchRoles();
        $company = $this->companyRepository->getFirst(Auth::user()->id);
        //$types = $this->businessTypeRepository->all();
        //$allcompany = $this->companyRepository->allByUser(Auth::user()->id);
        //$jobtype = $this->companyRepository->getAllJobs();
        //$job = $this->companyRepository->getJobPostBy($id);
        $jobs = $this->companyRepository->getAllJobsy($user_id);
        //$skillset = $this->companyRepository->getAllSkillSets();
        return view('back.myjobs',compact('user','roles','company','allcompany','skillset','jobtype','job','jobs'));
    }

    public function findjobs(){

        $user_id = Auth::user()->id;
        $user = $this->userRepository->getUserById(Auth::user()->id);
        //$roles = $this->roleRepository->all();
        $roles = $this->roleRepository->getSwitchRoles();
        $company = $this->companyRepository->getFirst(Auth::user()->id);
        //$types = $this->businessTypeRepository->all();
        //$allcompany = $this->companyRepository->allByUser(Auth::user()->id);
        //$jobtype = $this->companyRepository->getAllJobs();
        //$job = $this->companyRepository->getJobPostBy($id);
        //$jobs = $this->companyRepository->getAllJobsy($user_id);
        $jobs = $this->companyRepository->getAllJobsPosted();
        //$skillset = $this->companyRepository->getAllSkillSets();
        return view('back.browsejobs',compact('user','roles','company','allcompany','skillset','jobtype','job','jobs'));

    }



    public function jobdetails($id){
        $user = $this->userRepository->getUserById(Auth::user()->id);
        $roles = $this->roleRepository->getSwitchRoles();
        //$roles = $this->roleRepository->all();
        $company = $this->companyRepository->getFirst(Auth::user()->id);
        //$types = $this->businessTypeRepository->all();
        //$allcompany = $this->companyRepository->allByUser(Auth::user()->id);
        //$jobtype = $this->companyRepository->getAllJobs();
        $job = $this->companyRepository->getJobPostBy($id);
        $jobs = $this->companyRepository->getAllJobsy(Auth::user()->id);
        $progress = 1;
        $skillset = $this->companyRepository->getAllSkillSets();
        return view('back.jobdetails',compact('user','roles','company','allcompany','skillset','jobtype','job','jobs'));
    }



    public function postjob(){
        $user = $this->userRepository->getUserById(Auth::user()->id);
        // $roles = $this->roleRepository->all();
        $roles = $this->roleRepository->getSwitchRoles();
        $company = $this->companyRepository->getFirst(Auth::user()->id);
        //$types = $this->businessTypeRepository->all();
        $allcompany = $this->companyRepository->allByUser(Auth::user()->id);
        $jobtype = $this->companyRepository->getAllJobs();
        $job = $this->companyRepository->getJobPost(Auth::user()->id);
        $progress = 1;
        $skillset = $this->companyRepository->getAllSkillSets();
        return view('back.postjob',compact('user','roles','company','allcompany','skillset','jobtype','job'));
    }
    public function saveJobs(Request $request){

        //return 2000;
        $user_id = Auth::user()->id;
        if (isset($_POST['progress4'])) {
            if (isset($_POST['checkbox_option'])) {
                $skillsetdata = $_POST['checkbox_option'];
                //return sizeof($skillsetdata);
                $jobpost = $this->companyRepository->storeJobPost($request->all(),$user_id,$skillsetdata);
                //return $jobpost;
                return redirect($_SERVER['HTTP_REFERER'])->with('success',$jobpost);
            }else{
                $skillsetdata = Array();
                $jobpost = $this->companyRepository->storeJobPost($request->all(),$user_id,$skillsetdata);
                return redirect($_SERVER['HTTP_REFERER'])->with('success',$jobpost);
            }
        }else{
            $skillsetdata = Array();
            $jobpost = $this->companyRepository->storeJobPost($request->all(),$user_id,$skillsetdata);
            if ($jobpost == 'Completed') {
                $url = '/job/'.$request->job_id.'/details';
                return redirect($url)->with('success',$jobpost);

            }
            return redirect($_SERVER['HTTP_REFERER'])->with('success',$jobpost);
        }

    }



    public function storeCompany(Request $request){
    	$user_id = Auth::user()->id;
    	if ($request->action == 'logo') {
    		//call function to upload logo
    		$upload_logo=Input::file('form-register-photo-2');
    		if ($upload_logo != ''){

		        $file2 = $_FILES['form-register-photo-2']['tmp_name'];
		        if ($file2 !='') {
		            $sizey = $_FILES['form-register-photo-2']['name']." (".$_FILES["form-register-photo-2"]["size"]/1000;
		            $filename = $sizey." KB)";
		            $newFilePath = $_SERVER['DOCUMENT_ROOT']."/images/brands/".$_FILES['form-register-photo-2']['name'];
		            $savepath = "/images/brands/".$_FILES['form-register-photo-2']['name'];
		            if(move_uploaded_file($file2, $newFilePath)){
		            	$company = $this->companyRepository->store($request->all(), $savepath, $user_id);

		            	return redirect($_SERVER['HTTP_REFERER'])->with('success','Successful uploaded logo');
		            }
		        }

    		}else{

    		}

    	}else{
        	$company = $this->companyRepository->store($request->all(), null, $user_id);
        	return redirect($_SERVER['HTTP_REFERER'])->with('success','Successful uploaded logo');
    	}
    }

    public function createcompanyprofile(){
		$user = $this->userRepository->getUserById(Auth::user()->id);
		$roles = $this->roleRepository->all();
		$company = $this->companyRepository->getFirst(Auth::user()->id);
		$types = $this->businessTypeRepository->all();
    	return view('back.create_company',compact('user','roles','company','types'));
    }

    public function switchAccount(Request $request, $id){
    	$result = $this->userRepository->switchTo($request->all(),$id);
    	if($result == false){
    		return redirect('/404');
    	}else{
    		$message = 'You have successful switched to '.$result->role->role_name;
    		if ($result->role->role_name == 'Employer') {
    			return redirect('/employer')->with('success',$message);
    		}elseif($result->role->role_name == 'Employee'){
    			return redirect('/employee')->with('success',$message);
    		}
    	}
    	
    }

    public function profile($name, $id){

		$user = $this->userRepository->getUserById($id);
        $roles = $this->roleRepository->getSwitchRoles();
		//$roles = $this->roleRepository->all();
    	if ($name == 'User') {
	    	return view('back.user',compact('user','roles'));
    	}elseif ($name == 'Administrator') {
    		return view('back.administrator',compact('user','roles'));
    	}elseif ($name == 'Employer') {
    		$company = $this->companyRepository->getFirst(Auth::user()->id);
    		return view('back.employer',compact('user','roles','company'));
    	}elseif ($name == 'Employee') {
    		return view('back.employee',compact('user','roles'));
    	}
    }

    public function employer(){
		$user = $this->userRepository->getUserById(Auth::user()->id);
		//$roles = $this->roleRepository->all();
        $roles = $this->roleRepository->getSwitchRoles();
		$company = $this->companyRepository->getFirst(Auth::user()->id);
    	return view('back.employer',compact('user','roles','company'));
    }

    public function employee(){
        $user = $this->userRepository->getUserById(Auth::user()->id);
        //$roles = $this->roleRepository->all();
        $roles = $this->roleRepository->getSwitchRoles();
        //$company = $this->companyRepository->getFirst(Auth::user()->id);
        return view('back.employee',compact('user','roles','company'));
    }

    public function createresume(){
        $user = $this->userRepository->getUserById(Auth::user()->id);
        //$roles = $this->roleRepository->all();
        $roles = $this->roleRepository->getSwitchRoles();
        $mycv = $this->roleRepository->getEmployeeProfile(Auth::user()->id);
        //$company = $this->companyRepository->getFirst(Auth::user()->id);
        return view('back.createcv',compact('user','roles','mycv'));
    }

    public function saveCVs(Request $request){
        $user_id = Auth::user()->id;
        if ($request->action == 'profile') {
            //call function to upload logo
            $profile_photo=Input::file('profile_photo');
            if ($profile_photo != ''){

                $file2 = $_FILES['profile_photo']['tmp_name'];
                if ($file2 !='') {
                    $sizey = $_FILES['profile_photo']['name']." (".$_FILES["profile_photo"]["size"]/1000;
                    $filename = $sizey." KB)";
                    $newFilePath = $_SERVER['DOCUMENT_ROOT']."/images/man/".$_FILES['profile_photo']['name'];
                    $savepath = "/images/man/".$_FILES['profile_photo']['name'];
                    if(move_uploaded_file($file2, $newFilePath)){
                        $employee = $this->roleRepository->storeEmployee($request->all(), $savepath, $user_id);

                        return redirect($_SERVER['HTTP_REFERER'])->with('success',$employee);
                    }
                }

            }else{

            }

        }else{
            $employee = $this->roleRepository->storeEmployee($request->all(), null, $user_id);
            return redirect($_SERVER['HTTP_REFERER'])->with('success',$employee);
        }
    }

}
