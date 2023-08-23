<?php

namespace App\Http\Controllers\companyCss;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyCssController extends Controller
{
    public function index(){
        return view("companyCss.about");
    }

    public function deals(){
        return view("companyCss.deals");
    }

    public function reservation(){
        return view("companyCss.reservation");
    }
}
