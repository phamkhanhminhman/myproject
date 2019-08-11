<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class testController extends Controller {

	public function home() {

		$test = DB::table('test')->where('size', '<', '2097152')->orWhere('size', null)->get();
		return view('user/home', compact('test'));
	}
	public function test() {

		$test = DB::table('test')->get();
		// dd($test);
		// $test2 = [];
		// foreach ($test as $key) {
		// 	$decode = new \stdClass();
		// 	$decode->name = urldecode($key->name);
		// 	$decode->id = $key->id;
		// 	$test2[] = $decode;
		// }
		// dd($test2);
		return view('test', compact('test'));
	}
	public function upload() {
		return view('user/upload');
	}

	public function import(Request $request) {

		$file = $request->file('file');
		$name = 'images/' . $file->getClientOriginalName();
		$size = $file->getClientSize();
		$file->move('./images/', $name);
		$import = DB::table('test')->insert(
			[
				'name' => $name,
				'size' => $size,
				'username' => $request->session()->get('username'),
			]);
		// foreach ($anh as $key) {
		// 	$import = DB::table('test')->insert(
		// 		[
		// 			'name' => $key,
		// 		]);

		// }
		// return redirect('test');
		// $typeImage = $file->getClientOriginalExtension();
	}
}
