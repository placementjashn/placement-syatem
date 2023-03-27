<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use DB;

class Pagination extends Controller
{
    function index()
    {
        $data= DB::table('post')->orderBy('id','asc')->paginate(5);
        return view('pagination',compact('data'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $data = str_replace(" ","%",$query);
            $data = DB::table('post')
                    ->where('company_id','like','%'.$query.'%')
                    ->orwhere('name','like','%'.$query.'%')
                    ->orwhere('email','like','%'.$query.'%')
                    ->orderBy($sort_by,$sort_type)
                    ->paginate(5);
            return view('pagination_data',compact('data'))->render();
        }
    }
}