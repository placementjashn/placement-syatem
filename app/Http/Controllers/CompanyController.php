<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\User;
use App\Models\CompareList;
use Illuminate\Console\View\Components\Alert;
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
      function storecomparelist(Request $request) {
        CompareList::create($request->except('_token'));
        return redirect('comparedisplaylist'); 
        /* $con = CompareList::select('*')
        ->where('id','=', Auth::User()->id)->select('id')->get()->count();
        
        if($con <= 2)  {
            CompareList::create($request->except('_token'));
        }   
        else{
            echo "Maximum Two Company Was Compare";
        } 
 */

        /* $con =1;
        if($con<=2)  {
            CompareList::create($request->except('_token'));
        }   
        else{
            die('Maximum Two Company Was Compare');
            /* $this->info("Your Message");
                echo "Maximum Two Company Was Compare"; 
        }
         /* return view('comparedisplaylist',$values); 
         /* dd($values);  */
          /* return "Company Added in compare list";     
           return redirect('comparedisplaylist');    */
    }
    function removecomparelist() {

    }
    function showcomparelist() {
         $data = CompareList::select('*')
         ->where('id','=',Auth::User()->id)->with('user','company')->get()->toArray();
        /* $data = CompareList::with('item')->where('id',Auth::User()->id)->get(); */
         /* dd($data);  */
        /* die($data); */
       /*  return view('comparedisplaylist',['data'=>$data]);  */
         return view('comparedisplaylist',compact('data')); 
    } 

    public function applieddata(Request $request){
        $applied = new Applied; 
        $applied->company_id =$request['company_id'];
        $applied->job_id =$request['job_id'];
        $applied->jobname=$request['job_name'];
        $applied->JobDescription=$request['jobDescription'];
        $applied->id =$request['userid'];
        $applied->qulification =$request['qulification'];
        $applied->experience =$request['experience'];
        $applied->save();
        return redirect('/appliedstudview'); 
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
    public function applied($company_id){
        $jobs = job::select('*')
        ->where('company_id',"=", "$company_id")
        ->get();
        /* die($jobs); */
        return view('appliedStudentform',['jobs'=>$jobs]);
    }
    public function view()
    {
        $users = User::select("*")
        ->where("id","=",Auth::User()->id)->get();
            $data = Applied::select('*')
            ->where('id','=',Auth::User()->id)->with('company','user','job')->get()->toArray();
            /* dd($data); */
            return view('appliedstudview')->with(compact('data','users')); 
    }
    public function cancleappliedjob($applied_id){
        $applied = Applied::find($applied_id);
        if(!is_null($applied)){
            $applied->delete();
        }
        return redirect()->back();
    }
}