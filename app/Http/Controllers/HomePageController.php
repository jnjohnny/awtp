<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database;
use App\Models\registration;
use App\Models\login;
use App\Http\Controllers\sb;
    

class HomePageController extends Controller
{
    
    public function index()
    {
        return view('home.index');
    }

    public function login()
    {
        return view('home.login');
    }

    public function register()
    {
        return view('home.register');
    }

    
    public function loginsubmit(Request $req)
    {
        
        $req->validate(
        [
         'uname'=>'required|min:3|max:20',
         'password'=>'required'
        ],
        [
            'uname.required'=>'Please Enter User Name',
            'uname.max'=>'Enter at least 20 Character'
        ]
    
    );
    
    $login = login::where('username','=',$req->uname)
    ->where('password','=',$req->password)->first();

    if($login)
    {   
        if($login->usertype==2)
      {
       $req->session()->flash('username',$req->uname);
       return redirect()->route('dc'); 
       }
       elseif($login->usertype==1)
      { 
        $req->session()->flash('username',$req->uname);
        return redirect()->route('dbb');    
    
    } 
    else {
        session()->flash('msg','Username or Password is Invalid');
        return redirect()->route('login');
    }

   }
 }

public function registerSubmit(Request $req)
{
    
    $req->validate(
    [
     'name'=>'required|regex:/^[A-Z a-z]+$/',
     'email'=>'required|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',
     'mobile'=>'required',
     'address'=>'required',
     'division'=>'required',
     'status'=>'required',
     'psw'=>'required',
     'pswrepeat'=>'required|same:psw'
    ],
    [
        'name.required'=>'Please Enter Your Name',
        'email.regex'=>'Please Enter a Valid Email address',
        'pswrepeat.same'=>'Password & Confirm Password Must be Same',
        'psw.required'=>'Please Enter Password',
        'mobile.required'=>'Please Enter Mobile Number',
        'pswrepeat.required'=>'Please Enter Password'
    ]
);

$rt = new registration();
$rt->username = $req->mobile;
$rt->name = $req->name;
$rt->mobilenumber = $req->mobile;
$rt->address = $req->address;
$rt->division = $req->division;
$rt->email = $req->email;
$rt->password = $req->psw;
$rt->status = $req->status;
$rt->usertype = 1;
$rt->save();


$rtt= new login();
$rtt->username=$req->mobile;
$rtt->password=$req->psw;
$rtt->usertype=1;
$rtt->save();


    return "Submitted Form";
}

//error ashe 
public function dashboardforsingle()
    {

        return view('single.dashboard');
    }


public function mybuilding()
    {
        return view('single.building');
    }

}
