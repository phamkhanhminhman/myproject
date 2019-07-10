<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class testController extends Controller
{
    public function test()
    {
    	return view('test');
    }
}
