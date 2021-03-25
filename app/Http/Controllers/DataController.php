<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DataController extends Controller
{
    

    public function getCountries()
        {
            $countries = DB::table('countries')->pluck("name","id");
            return view('dropdown',compact('countries'));
        }
}
