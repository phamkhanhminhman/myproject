<?php

namespace App\Http\Controllers\admin;

use DB;
use Illuminate\Http\Request;

class dashboardController 
{

	public function test()
	{	
		$test = DB::table('test')->get();
		$users = DB::table('users')->get();
		return view('admin/dashboard', compact('test', 'users'));
	}
	
}
