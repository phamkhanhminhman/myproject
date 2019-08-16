<?php

namespace App\Http\Controllers\admin;

use DB;
use Illuminate\Http\Request;

class dashboardController 
{

	public function test()
	{
		return view('admin/dashboard');
	}
	
}
