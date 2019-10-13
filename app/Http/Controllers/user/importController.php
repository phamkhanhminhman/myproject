<?php

namespace App\Http\Controllers\user;

use DB;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class importController 
{

	public function upload() 
	{

		return view('user/upload');
	}

	public function import(Request $request) 
	{

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
				'name' => 'images/' . 'resize' . $file->getClientOriginalName(),
				'size' => $size,
				'username' => $request->session()->get('username'),
			]);

		//Resize
		if ($width < 2000 || $height < 2000) {
			$img = Image::make('images/' . $file->getClientOriginalName())->resize($width / 2, $height / 2);
			$img->save(public_path('./images/resize' . $file->getClientOriginalName()));
		} else {
			$img = Image::make('images/' . $file->getClientOriginalName())->resize($width / 4, $height / 4);
			$img->save(public_path('./images/resize' . $file->getClientOriginalName()));
		}
		alert('Uploaded', 'Successfully', 'success');

	}
}
