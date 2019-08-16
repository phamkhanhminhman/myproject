<?php

namespace App\Http\Controllers\admin;

use DB;
use Illuminate\Http\Request;

class adminController 
{

	public function test()
	{
		return view('admin/home');
	}
	
}
