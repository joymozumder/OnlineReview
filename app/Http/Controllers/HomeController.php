<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Organization;
//use File;
//use Image;
//use App\Approval;
use App\User;
//use App\Review;

class HomeController extends Controller
{





    public function dashboard()
    {
        return view('frontend.pages.dashboard');
    }




    public function test(){
        return view('frontend.userprofile');
    }
    public function welcome(){
        return view('welcome');
    }
    public function login(){
    	return view('login');
    }
    
    public function postlogin(Request $req){
        $validatedData = $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $email=$req->email;
        $password=md5($req->password);
        
        $obj=Organization::where('email','=',$email)
                 ->where('password','=',$password)
                 ->first();
        $obj_2=User::where('email','=',$email)
                 ->where('password','=',$password)
                 ->first();
                          
        if($obj)
        {
        	//return "Organization";
            Session::put('userid',$obj->id);
            Session::put('userrole',$obj->role);
            Session::put('uname',$obj->name);
            Session::put('fname',$obj->filename);
            return redirect()->to('/dashboard');
            //this pass the variable
            $sample = Organization::find($obj->id);       
            return view('frontend.organizationprofile',['data'=>$sample]);
        }
        else if($obj_2){
        	//return "User";
            Session::put('userid',$obj_2->id);
            Session::put('userrole',$obj_2->role);
            Session::put('uname',$obj_2->name);
            Session::put('fname',$obj_2->filename);
            return redirect()->to('/dashboard');
            //this pass the variable
            $sample = User::find($obj_2->id);       
            return view('frontend.userprofile',['data'=>$sample]);
        		
        }
        else if($req->email=="admin@gmail.com" and $req->password="123"){
            return "admin";
            Session::put('userrole','0');
            Session::put('uname','Admin');
            return redirect()->to('/admindashboard');
        }
        
        else {
        	return redirect()->to('login');
        }
    }


    public function list(Request $req,$category)
    {
        //dd($category);
        $obj = Organization::select()
            ->where('category','=',$category)
            ->orderBy('rating','DESC')
            ->paginate(10);
        return view('frontend.pages.list', ['data'=>$obj]);
        //dd()
    }
    
}
