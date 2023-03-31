<?php

namespace App\Http\Controllers\frontend;
use App\Models\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeCssController extends Controller
{
    public function index(){
        $companies = Company::all();
        return view('frontend.admincss',['companies'=>$companies]);
    }
}
