<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;
use DB;

class EmployeeController extends Controller
{
    public function companyindex(){
        $data = Employee::all();
        return view('company.dashboard',['data'=>$data]);
    }

    public function empadd(){
        return view('addemployee');
    }
    
    public function empdata(Request $request){
        /* echo "<pre>";
        print_r($request->all()); */

        $request->validate([
            'empname'=>'required',
            'email'=>'required|email|unique:employees',
            'password'=>'required|min:5|max:12',
            'gender'=>'required',
            'empimg'=>'required',
            'phone'=>'required|unique:employees',
            'designation'=>'required' 
        ]);

        $emp = new Employee;
        $emp->empname = $request['empname'];
        $emp->designation = $request['designation'];
        $emp->email = $request['email'];
        $emp->password = Hash::make($request['password']);
        $emp->empimg = $request['empimg'];
        $emp->gender = $request['gender'];
        $emp->phone = $request['phone'];
        $emp->save();
        $data=Employee::all();
        return redirect('/company/dashboard'); 
       
    }
    //To Display employee list on Company Dashboard

    
    /* public function emplogin(){
        return view('loginemp');
    }

    public function verifylogin(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $emp=Employee::where('email','=',$request->input('email'))->first();
        if($emp)
        {
            if(Hash::check($request->password ,$emp->password))
            {
                return back()->with('success','You have logged succesfully');
            }
            else{
                return back()->with('fail','password is incorrect');
            }
        }
        else
        {
            return back()->with('fail','This email is not registered');
        }
    } */
}
?>