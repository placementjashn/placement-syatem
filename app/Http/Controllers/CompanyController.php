<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\User;
use App\Models\CompareList;
use Illuminate\Http\Request;
use App\Models\job;
use App\Models\Applied;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
{
    public function companylist(){

        $companies = Company::all();
        /* $data=compact('company'); */
        return view('companylist',['companies'=>$companies]);
    }
     public function compare(){
        $companies = Company::all();
        return view('/compare',['companies'=>$companies]);
    } 
    public function records(){
        $companies = Company::all();
        /* $data=compact('company'); */
        return view('compare',['companies'=>$companies]);

        /* $data=Company::select("name")->get();
        return view('compare',['data'=>$data]); */

       /*  $companies = Company::all();
        return view('compare',['companies'=>$companies]); */
    }

    //mange compare list
     /* function storecomparelist(Request $request) {
       // echo "hiii";
        CompareList::create($request->except('_token'));
        return "Company Added in compare list"; 
    }
    function removecomparelist() {

    }
    function showcomparelist() {

    } */

    public function applied($company_id){
        $jobs = job::select('*')
        ->where('company_id',"=", "$company_id")
        ->get();
        /* die($jobs); */
        return view('appliedStudentlist',['jobs'=>$jobs]);
    }
    //company side student
    public function display(){
        $data = Applied::select('*')
        ->where('company_id','=',Auth::guard('company')->user()->company_id)->with('user','job')->get()->toArray();
        return view('companystudlist')->with(compact('data')); 
        /*
        $job = job::select("*")
        ->where("email", "=", session('email'))
        ->get();
        return view('view', compact('job')); */                 
    }
    //apllied student side
    public function view()
    {
            $data = Applied::select('*')
            ->where('id','=',Auth::User()->id)->with('company','user','job')->get()->toArray();
            /* dd($data); */
            return view('appliedstudview')->with(compact('data')); 
    }
}
