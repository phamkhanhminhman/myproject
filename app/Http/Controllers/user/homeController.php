<?php

namespace App\Http\Controllers\user;

use DB;
use Illuminate\Http\Request;

class homeController 
{
	public function home() 
	{

		$test = DB::table('test')->get();
		return view('user/home', compact('test'));

	}
}
