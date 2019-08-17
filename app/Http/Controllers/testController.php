<?php

namespace App\Http\Controllers;

use DB;
Use Alert;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class testController extends Controller {

	public function home() {

		$test = DB::table('test')->get();
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
		$data = getimagesize($file);

 		$width = $data[0];
		$height = $data[1];

		$name = 'images/' . $file->getClientOriginalName();
		$size = $file->getClientSize();

		// $file->move('./images/resize', $name);
		$file->move('./images/', $name);


		$import = DB::table('test')->insert(
			[
				'name' => 'images/'.'resize'. $file->getClientOriginalName(),
				'size' => $size,
				'username' => $request->session()->get('username'),
			]);

		//Resize 
		if ($width < 2000 || $height < 2000) {
			$img = Image::make('images/'.$file->getClientOriginalName())->resize($width/2, $height/2);
			$img->save(public_path('./images/resize' .$file->getClientOriginalName()));
		} else {
			$img = Image::make('images/'.$file->getClientOriginalName())->resize($width/4, $height/4);
			$img->save(public_path('./images/resize' .$file->getClientOriginalName()));
		}
		alert('Uploaded','Successfully', 'success');
		
	}
}
