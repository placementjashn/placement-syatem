<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\job;
use Session;
use Illuminate\Support\Facades\Auth;


class postController extends Controller
{
    public function index(){
        $data = User::all();
        return view('employeedashborad',['data'=>$data]); 
    }

    public function addpost(){
        $url =url('/addpost');
        $title = "Add Post";
        $data = compact('url','title');
        return view('addpost')->with($data);
        /* $employee = Employee::all();
        return view('addpost')->with('$employee'); */
    }
 
    public function store(Request $request){
        /* echo "<pre>";
        print_r($request->all());  */
        
        $job = new job;
        $job->name = $request['name'];
        $job->description = $request['description'];
        $job->salary = $request['salary'];
        $job->expirence = $request['expirence'] ;  
        $job->vacancy =$request['vacancy'];
        $job->time =$request['time'];
        $job->empemail =$request['empemail'];
        $job->company_id =$request['company_id'];
        $job->save();
        return redirect('/view');
        /* Session::put('name', $name); */
       /*  dd($name); */

    }

    public function view()
    {
        $job = job::select("*")
                ->where("empemail", "=", session('email'))
                ->get();
        return view('view', compact('job'));
    }

    public function delete($job_id)
    {
        $job = job::find($job_id);
        if(!is_null($job)){
            $job->delete();
        }
        return redirect('view');
    }

    public function edit($job_id)
    {
        $job = job::find($job_id);
        if(is_null($job)){
            //not found
            return redirect('view');
        }
        else{
            //found
            $title = "Update Post";
            $url =url("/update")."/".$job_id;
            $data= compact('job','url','title');
            return view('addpost')->with($data);
        }
    }

    public function update($job_id, Request $request )
    {
        $job = job::find($job_id);
        $job->name = $request['name'];
        $job->description = $request['description'];
        $job->salary = $request['salary'];
        $job->expirence = $request['expirence'] ;  
        $job->vacancy =$request['vacancy'];
        $job->time =$request['time'];
        /* $job->email =$request['email']; */
        $job->save();
        return redirect('view');

        /* $job = job::where('job_id',$request['job_id'])->update([
            "name" => $request['name'],
            "description" => $request['description'],
            "salary" => $request['salary'],
            "expirence" => $request['expirence'],
            "vacancy" => $request['vacancy'],
            "time" => $request['time'],
            ]);
            $data=compact('job');
            return redirect('/view')->with($data); 
 */    }
}
