<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companylist(){

        $companies = Company::all();
        /* $data=compact('company'); */
        return view('companylist',['companies'=>$companies]);
    }
}
