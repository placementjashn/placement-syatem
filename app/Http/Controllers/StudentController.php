<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function student()
    {
        $users = User::select("*")
        ->where("id","=",Auth::User()->id)->get();
       /*  die($user); */
       $companies = Company::all() ;
        return view('dashboard',['users'=>$users],['companies'=>$companies]);
    }


  //status 
    public function updateStatus(Request $request)
    {
       /*  return view('statusUpdate'); */
       /*  die('hiii'); */
        $user = User::findOrFail($request->id);
        $user->status = $request->status;
        $user->save();
        if($user->status == 0)
        {
            return response()->json(['message' => 'User Rejected Successfyull.']);
        }
        else
        {
            return response()->json(['message' => 'User selected successfully.']);   
        }
    }

    
    /* public function upload(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;

        $image = $request->file;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('student',$imagename);
            $user->image = $imagename;
        }
       
        $user->save();
        return redirect()->back();
    } */
}

