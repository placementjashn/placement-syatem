<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use LDAP\Result;

class CompanyDashboard extends Controller 
{
    public function companyindex(){
        $data = Employee::all();
        return view('companydashboard',['data'=>$data]);
    }

    public function empadd(){
        return view('addemployee');
    }
    
    public function empdata(Request $request){
        /* echo "<pre>";
        print_r($request->all()); */

        $request->validate([
            'empname'=>'required',
            'email'=>'required|email|unique:table_employee',
            'password'=>'required|min:5|max:12',
            'gender'=>'required',
            'empimg'=>'required',
            'phone'=>'required|unique:table_employee',
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

        return redirect('/company');
       
    }

    public function emplogin(){
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
    }
          
}

