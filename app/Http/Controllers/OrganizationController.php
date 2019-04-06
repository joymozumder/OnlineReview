<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Organization;
use File;
use Image;
use App\Approval;

class OrganizationController extends Controller
{
    public function OrganizationRegister(){
    	return view('frontend.organizationregister');
    }
    public function OrganizationStore(Request $req){
    	$validatedData = $req->validate([
    		'name' => 'required',
            'email' => 'required|email|unique:organizations,email|unique:approvals,email',
            'address' => 'required',
            'description' => 'required',
            'category' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password',
            'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
            
        ]);
    	$obj=new Approval();
        $obj->name=$req->name;
    	$obj->email=$req->email;
    	$obj->address=$req->address;
        $obj->description=$req->description;
        $obj->category=$req->category;
    	$obj->rating="5";
        $obj->role="2";
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
       
    	if($obj->save()){
    		return redirect('login')->with('msg','Successfully registered and please wait for admin Approval');
    	}
    }


    public function organizationupdate(Request $req,$id){
        $obj = Organization::find($id);       
        $obj->name=$req->name;
        $obj->email=$req->email;
        $obj->address=$req->address;
        $obj->description=$req->description;

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
            $sample = Organization::find($obj->id);       
            return view('frontend.organizationprofile',['data'=>$sample]);
        }
    }

    public function organizationprofile($id)
    {

        $obj = Organization::find($id);
        return view('frontend.pages.organizationprofile',['data'=>$obj]);
    }

}
