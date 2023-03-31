<?php

namespace App\Http\Controllers\studentCss;
use App\Models\Company;
use App\Models\User;
use App\Models\Applied;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentCssController extends Controller
{
    public function index(){
        return view('studentCss.studentcss');

    }

    public function about(){
        return view('studentCss.about');

    }

    public function services(){
        $users = User::select("*")
        ->where("id","=",Auth::User()->id)->get();
        $data = Applied::select('*')
        ->where('id','=',Auth::User()->id)->with('company','user','job')->get()->toArray();
        /*  dd($data);  */
        return view('studentCss.services')->with(compact('data','users')); 

    }
    public function applieddata(Request $request){
        $applied = new Applied;
        $applied->job_id =$request['job_id'];
        $applied->username =$request['username'];
        $applied->contact =$request['contact'];
        $applied->company_id =$request['company_id'];
        $applied->email =$request['email'];
        $applied->qulification =$request['qulification'];
        $applied->experience =$request['experience'];
        $applied->id=$request['id'];
        $applied->save();
        return redirect('/services'); 
    }
    

    public function sdetail(){
        return view('studentCss.service-details');

    }
    public function blog(){

        $users = User::select("*")
        ->where("id","=",Auth::User()->id)->get();
        $companies = Company::all();
        return view('studentCss.blog',['companies'=>$companies],['users'=>$users]);
    }

    public function bdetail(){
        return view('studentCss.blog-details');

    }

    public function projects(){
        return view('studentCss.projects');

    }
     
    public function contact(){
        return view('studentCss.contact');

    }
    
}
