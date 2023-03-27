<?php

namespace App\Http\Controllers\Companyauth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class RatingController extends Controller
{
    public function rating(){
        /* Session::put('page','rating'); */
        $ratings=Rating::select('*')
        ->where('company_id','=',Auth::guard('company')->user()->company_id)->with('user','company')->get()->toArray();
       /*  dd($ratings); */
        return view('company.auth.ratingreview')->with(compact('ratings'));
    }
    public function updateRatingStatus(Request $request){
        if($request->ajax()){
            $data=$request->all();
            if($data['status']="Active"){
                $status=0;
            }else{
                $status=1;
            }
            Rating::where('rating_id',$data['rating_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'rating_id'=>$data['rating_id']]);
        }
    }
}
/* return view('company.auth.ratingreview')->with(compact('ratings')); */\