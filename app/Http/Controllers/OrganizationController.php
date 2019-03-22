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
    	return view('backend.organizationregister');
    }
    public function OrganizationStore(Request $req){
    	$validatedData = $req->validate([
    		'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'description' => 'required',
            'category' => 'required',
            'password' => 'required',
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
    		return view('login');
    	}
    }
}
