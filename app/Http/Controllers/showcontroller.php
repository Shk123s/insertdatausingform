<?php

namespace App\Http\Controllers;
use App\Persondetails;
use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;

class showcontroller extends Controller
{
    public function showdaata()
    {
        return view('first');
    }
    public function showdfile()
    {
        $post = Persondetails :: all();
        return view('showdata',compact('post'));
    }
    public function postkrdo(Request $request)
    {
       $post =  Persondetails::insert([
        'email'=>$request->email,
        'password'=>$request->password,
        'name'=>$request->name,
        'filename'=>$request->filename,
        'image'=>$request->fileinput
       ]);    
                    if($request->hasFile('fileinput')){

                         $filename = time() . "-sk." . $request->file('fileinput')->getClientOriginalName();
                             
                          $file = $request->file('fileinput')->storeAs('public/uploads',$filename);
                          
                }
           
                return view('sucess');

    } public function showimage() 
    {
        $post = Persondetails::all();
        return view('first', compact('post'));
    }

}
