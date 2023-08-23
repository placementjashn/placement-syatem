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
    public function rating()
    {
        /* Session::put('page','rating'); */
        $ratings = Rating::select('*')
            ->where('company_id', '=', Auth::guard('company')->user()->company_id)
            ->with('user', 'company')
            ->get();


        $counts = count($ratings);


        $total_count = $counts * 5;
        $rating_sum = 0;


        foreach ($ratings as $value) {
            $rating_sum = $rating_sum + $value->rating;
        }
        $stars = ($rating_sum * 5) / $total_count;
        /*  dd($ratings); */
        return view('company.auth.ratingreview')->with(compact('ratings', 'stars'));
    }


    public function updateRatingStatus(Request $request)
    {
        $rating = Rating::findOrFail($request->rating_id);
        $rating->status = $request->status;
        $rating->save();
        if ($rating->status == 1) {
            return response()->json(['message' => 'Rating Verified Successfyull.']);
        } else {
            return response()->json(['message' => 'Rating Not Verified.']);
        }
    }
    public function ratingform()
    {
        return view('rating');
    }
    public function ratingdata(Request $request)
    {
        $rating = new Rating;
        $rating->rating = $request['rating'];
        $rating->review = $request['review'];
        $rating->company_id = $request['company_id'];
        $rating->id = $request['id'];
        $rating->save();


        $companies = Company::select('*')
            ->where('company_id', "=", $request['company_id'])
            ->get();


        $jobs = job::select('*')
            ->where('company_id', '=', $request['company_id'])
            ->get();


        return redirect()->route('joblist', $request['company_id']);
        // return view('joblist', compact('jobs', 'companies'));
    }
}
/* return view('company.auth.ratingreview')->with(compact('ratings')); */
