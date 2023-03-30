<?php

namespace App\Http\Controllers\Companyauth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Rating;
use App\Models\Company;
use App\Models\job;
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
        $rating = Rating::findOrFail($request->rating_id);
        $rating->status = $request->status;
        $rating->save();
        if($rating->status == 1)
        {
            return response()->json(['message' => 'Rating Verified Successfyull.']);
        }
        else
        {
            return response()->json(['message' => 'Rating Not Verified.']);   
        }
    }
    public function ratingform(){
        return view('rating');
    }
    public function ratingdata(Request $request){
        $rating= new Rating;
        $rating->rating= $request['rating'];
        $rating->review= $request['review'];
        $rating->company_id= $request['company_id'];
        $rating->id= $request['id'];
        $rating->save();

        $companies=Company::select('*')
        ->where('company_id',"=", $request['company_id'])
        ->get();
        $jobs= job::select('*')
        ->where('company_id', '=' ,$request['company_id'])
        ->get();
        return view('joblist',compact('jobs','companies'));
    }
}
/* return view('company.auth.ratingreview')->with(compact('ratings')); */