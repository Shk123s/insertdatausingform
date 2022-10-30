<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadcontroller extends Controller
{
    public function uploadform()
    {
        return view('upload');
    }
    public function uploadSubmit(Request $request)
    {     $filename = time() . "-sk." . $request->file('fileinput')->getClientOriginalExtension();
         
        return $file = $request->file('fileinput')->storeAs('upload',$filename);
          $request->save();
     
                // $product = Persondetails::create($request->all());
                // foreach ($request->photos as $photo) {
                //     $filename = $request->file('fileinput')->storeAs('upload',$product);
                // }
        Persondetails::create([
            
            'fileinput' => $fileinput
        ]); 
        return  'Upload successful!';
    }
}
