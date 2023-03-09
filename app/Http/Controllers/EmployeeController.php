<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\job;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function company(){
        $job = job::select("*")
        ->where("email", "=", session('email'))
        ->get();
       
        $data=Employee::select("*")
        ->where("companyemail", "=", Auth::guard('company')->user()->email)->get();
        return view('company.dashboard',['data'=>$data]);
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
        $emp->companyemail=$request['companyemail'];
        $emp->save();
        $data=Employee::all();
        return redirect('/company/dashboard');
         /* return redirect('/loginemp');  */
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
