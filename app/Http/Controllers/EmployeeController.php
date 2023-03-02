<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\job;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function company(){
        return view('companydashboard');
    }
    public function empadd(){
        return view('addemployee');
    } 
    
    public function empdata(Request $request){
        /* p($request->all()); */
     
        /* echo "<pre>";
        print_r($request->all()); */

        /* return $request->input(); */
        $request->validate([
            'empname'=>'required',
            'email'=>'required|email|unique:employee',
            'password'=>'required|min:5|max:12',
            'gender'=>'required',
            'empimg'=>'required',
            'phone'=>'required|unique:employee',
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
         return redirect('/loginemp'); 
    }

    public function emplogin(){
        return view('loginemp');
    }

    public function verifylogin(Request $request)
    {
      /*   $session=session()->all(); */

        $data=$request->input();
        $request->session()->put('email',$data['email']);
        echo session('email'); 
        
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $emp=Employee::where('email','=',$request->input('email'))->first();
        if($emp)
        {
            if(Hash::check($request->password ,$emp->password))
            {
                return redirect('/employeedashborad');
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