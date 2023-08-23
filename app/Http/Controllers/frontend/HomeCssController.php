<?php


namespace App\Http\Controllers\frontend;


use App\Models\Company;
use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;


class HomeCssController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        // $ratings_list = Rating::select('*')
        //     ->with('user', 'company')
        //     ->groupBy('company_id')
        //     ->get();


        // foreach ($ratings_list as $values) {
        //     $ratings = Rating::select('*')
        //         ->where('company_id', '=', $values->company_id)
        //         ->with('user', 'company')
        //         ->get();


        //     $counts = count($ratings);


        //     $total_count = $counts * 5;
        //     $rating_sum = 0;


        //     foreach ($ratings as $value) {
        //         $rating_sum = $rating_sum + $value->rating;
        //     }
        //     $stars = ($rating_sum * 5) / $total_count;
        // }


        return view('frontend.admincss', ['companies' => $companies]);
    }
}

