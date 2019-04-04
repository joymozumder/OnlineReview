<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Organization;
use File;
use Image;
use App\Approval;
use App\User;
class UserController extends Controller
{
    public function UserRegister(){
    	return view('frontend.userregister');
    }
    public function UserStore(Request $req){
        $validatedData = $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password',
            'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
            
        ]);

    	$obj=new User();
        $obj->name=$req->name;
        $obj->email=$req->email;
        $obj->password=md5($req->password);
        //_____________________
        $originalImage= $req->file('filename');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(596,619);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 
        $obj->filename=time().$originalImage->getClientOriginalName();
        $obj->status=true;
        $obj->role="1";
       
        if($obj->save())
        {
            return redirect('login')->with('msg','Successfully registered');

            
        }
    }




    public function userupdate(Request $req,$id){
          $obj = User::find($id);       
        $obj->name=$req->name;
        $obj->email=$req->email;

        //_____________________
        if($req->filename!="")
        {
            $originalImage= $req->file('filename');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path().'/thumbnail/';
            $originalPath = public_path().'/images/';
            $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
            $thumbnailImage->resize(277,187);
            $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 
            $obj->filename=time().$originalImage->getClientOriginalName();
       
        }
        if($obj->save()){
            $sample = User::find($obj->id);       
            return view('frontend.userprofile',['data'=>$sample]);
        }

    }
}
