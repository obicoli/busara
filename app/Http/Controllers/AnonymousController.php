<?php

namespace busara\Http\Controllers;

use Illuminate\Http\Request;
use busara\Repositories\UserRepository;
use busara\Repositories\RoleRepository;
use Auth;

class AnonymousController extends Controller
{
    protected $userRepository;
    protected $roleRepository;

    public function __construct(UserRepository $userRepository,RoleRepository $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function index(){
        if (Auth::user()) {
            $user = $this->userRepository->getUserById(Auth::user()->id);
            $roles = $this->roleRepository->getSwitchRoles();
            return view('welcome',compact('user','roles'));
        }else{
            return view('welcome');
        }
    }

    public function uploadSingleFile($inputs){

    }

    public function contactus(){
    	return view('contact-us');
    }

    public function contactusmessage(Request $request){

        $chatcode = $this->generalRepo->generatePhoneConfirmationCode();
    	$inbox = $this->inboxRepo->saveInboxMessage($request,$chatcode);
        return redirect('/contact-us')->with('success','Your message successful submitted. We'."'ll get back to you");
    }

    public function blogs(){
        return view('our_blogs');
    }

    public function team(){
        return view('team');
    }

    public function about(){
        return view('about_us');
    }

    public function testimonials(){
        return view('testimonials');
    }

    public function messageLoginForm(){
        return view('messaging.auth.login');
    }

    public function phone(Request $request, UserRepository $userRepository){
    	$user = $userRepository->phone($request->code);
        if ($user) {
            return redirect($_SERVER['HTTP_REFERER'])
                ->with('success', 'Phone number verified you can now login');
        }else{
            return redirect($_SERVER['HTTP_REFERER'])
                ->with('error', 'Account not found');
        }
    }

}
