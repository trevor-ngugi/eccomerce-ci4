<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\DetailsModels;


class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login.php');
    }
    public function processLogin(){
        //login backend functionality
        echo "login works";
        
        $userModel=new UserModel();
        $user_details=$userModel->getOneUser();
        // echo "<pre>";print_r($user_details);
        $session=session();
        $session->set('user_details',$user_details);
        return redirect()->to('auth/homePage');

       

        // $session=session();
        // $session->set('user_details',$user_details);
        // return redirect()->to('auth/homePage');
       

    }
    public function homePage(){
        //load user homepage
        return view('auth/homepage.php');
    }
    public function register(){
        //load register page
        return view('auth/register.php');
    }
    public function processRegistration(){
        //load registration backend functionality
    }
}
