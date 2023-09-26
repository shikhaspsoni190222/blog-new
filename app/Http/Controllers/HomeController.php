<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Feedback;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function enquiry(Request $request,Enquiry $model){
        if($request->method()=="POST"){
            $model->name=$request->name;
            $model->email=$request->email;
            $model->message=$request->message;
            if($model->save()){
                return redirect()->back()->with('success','Enquiry saved successfully');

            }else{
                return redirect()->back()->with('error','Enquiry not saved ');
            }


        }
        
        return view('home.enquiry');
    }

    public function feedback(Request $request,Feedback $model){
        if($request->method()=="POST"){
           $model->name=$request->name;
           $model->mobile=$request->mobile;
           $model->feedback=$request->feedback;
           $model->rating= $request->rating;
           if($model->save()){
            return redirect()->back()->with('success','Feedback saved successfully');
           }else{
            return redirect()->back()->with('error','Feedback not saved');
           }
        }
        return view('home.feedback');
    }

}
