<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class testController extends Controller
{
    public function test()
    {
    	$test = DB::table('test')->get();
    	// dd($test);
    	return view('test', compact('test'));
    }
}
