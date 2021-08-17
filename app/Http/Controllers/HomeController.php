<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //

    public function myform(){
        return view('myform');
    }

    public function myformPost(Request $request){
        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        if($validator->passes()){
            return response()->json(['success' => 'Added new records']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }
}
