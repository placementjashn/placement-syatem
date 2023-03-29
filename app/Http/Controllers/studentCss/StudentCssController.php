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

    public function service(){
        return view('studentCss.service');

    }

}
