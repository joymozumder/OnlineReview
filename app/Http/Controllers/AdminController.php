<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Organization;
use File;
use Image;
use App\Approval;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('backend.pages.dashboard');
    }


    public function approvallist(){
        $sample = Approval::paginate(10);
        return view('backend.pages.approvallist', ['data'=>$sample]);
    }

   
    public function accept($id){
        $obj = Approval::find($id);
        $object=new Organization();
        $object->name=$obj->name;
        $object->email=$obj->email;
        $object->address=$obj->address;
        $object->description=$obj->description;
        $object->category=$obj->category;
        $object->rating=5;
        $object->password=$obj->password;
        $object->filename=$obj->filename;
        $object->role=2;
        $object->status=true;
        //_____________________
        
        $sample = Approval::find($id)->delete();
        
        if($object->save()){

            return redirect()->back();
        }
    }

    public function reject($id){
       $sam = Approval::find($id)->delete();
       return redirect()->back();
    }
}
