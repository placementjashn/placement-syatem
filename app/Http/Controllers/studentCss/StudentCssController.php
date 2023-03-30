<?php

namespace App\Http\Controllers\studentCss;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentCssController extends Controller
{
    public function index(){
        return view('studentCss.studentcss');

    }

    public function about(){
        return view('studentCss.about');

    }

    public function services(){
        return view('studentCss.services');

    }

    public function sdetail(){
        return view('studentCss.service-details');

    }
    public function blog(){
        return view('studentCss.blog');

    }

    public function bdetail(){
        return view('studentCss.blog-details');

    }

    public function projects(){
        return view('studentCss.projects');

    }
     
    public function contact(){
        return view('studentCss.contact');

    }
    
}
