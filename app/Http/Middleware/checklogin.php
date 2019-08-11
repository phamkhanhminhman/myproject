<?php

namespace App\Http\Middleware;

use Closure;

class checklogin {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {

		$value = $request->session()->get('username');

		if ($value) {
			return $next($request);
		} else {
			return redirect('/');
		}
	}
}