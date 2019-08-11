<?php

namespace App\Http\Controllers\user;

use DB;
use Illuminate\Http\Request;

class loginController {

	public function login() {

		return view('user/login');
	}

	public function signin(Request $request) {

		$username = $request->username;
		$password = $request->password;

		$request->session()->put('username', $username);

		$db = DB::table('users')
		->where([['username', $username], ['password', $password]])
		->get();
		$d = count($db);

		if ($d === 1) {
			$history = DB::table('history_login')->insert(
				[
					'username' => $request->session()->get('username'),
					'action' => "login"
				]);
			return redirect('home');
		} else {
			return redirect('/');
		}
	}

	public function signOut(Request $request) {
		
		$history = DB::table('history_login')->insert(
			[
				'username' => $request->session()->get('username'),
				'action' => "logout"
			]);
		$forget = $request->session()->forget('name');
		
		return redirect('/');
	}

}
