<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentindex()
    {
        return view('studentdashboard');
    }

    public function display(){
        $data = User::all();
        return view('companystudlist',['data'=>$data]);
        /*
        $job = job::select("*")
        ->where("email", "=", session('email'))
        ->get();
        return view('view', compact('job')); */
    }

    public function upload(Request $request)
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
    }
}
