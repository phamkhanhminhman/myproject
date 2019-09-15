<?php

namespace App\Http\Controllers;

use Alert;
use DB;
use Google\Auth\Credentials\UserRefreshCredentials;
use Google\Auth\OAuth2;
use Google\Photos\Library\V1\PhotosLibraryClient;
use Google_Client;
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

	public function getListAlbums(Request $request) {
		$clientId = '701132481011-u3nq1lfn7aenv3svjab0dobqe2se7tot.apps.googleusercontent.com';
		$clientSecret = '8lrvysKx4KEnJz_dPI2OWtxM';

		$scopes = [
			'https://www.googleapis.com/auth/photoslibrary',
			'https://www.googleapis.com/auth/photoslibrary.readonly',
			'https://www.googleapis.com/auth/photoslibrary.readonly.appcreateddat',

		];

		$client = new Google_Client(); // khởi tạo Google Client
		$client->setApplicationName('Demo Laravel'); // đặt tên cho ứng dụng (không quan trọng lắm)

		// cài đặt xin quyền truy cập của token, ở đây tôi đang xin truy cập đến dữ liệu Calendar và Drive
		$client->setScopes(\Google_Service_Drive::DRIVE_METADATA_READONLY);
		$client->setAuthConfig('./ClientID - PKMM.json'); // đường dẫn đến file credentials.json
		$client->setAccessType('offline'); // không rõ lắm nên cứ để vậy đi :">

		$auth_url = $client->createAuthUrl();
		// header('Location: http://www.freetuts.net/');

		header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
		dd('1');

			
		// return $auth_url;


















		// $oauth2 = new OAuth2([
		// 	'clientId' => $clientId,
		// 	'clientSecret' => $clientSecret,
		// 	'authorizationUri' => 'https://accounts.google.com/o/oauth2/v2/auth',
		// 	// Where to return the user to if they accept your request to access their account.
		// 	// You must authorize this URI in the Google API Console.
		// 	'redirectUri' => 'http://localhost:8000',
		// 	'tokenCredentialUri' => 'https://www.googleapis.com/oauth2/v4/token',
		// 	'scope' => $scopes,
		// ]);

		// dd($oauth2->getAccessToken());

		// $code = $request->getQueryParam('code', $default = null);
		// dd($code);
		// $oauth2->setCode($code);
		// $authToken = $oauth2->fetchAuthToken();
		// dd($authToken);

		// // require_once 'C:\Users\MinhMan\Documents\myproject\vendor\autoload.php';
		// $authCredentials = new UserRefreshCredentials(
		// 	$scopes,
		// 	[
		// 		'client_id' => '701132481011-u3nq1lfn7aenv3svjab0dobqe2se7tot.apps.googleusercontent.com',
		// 		'client_secret' => '8lrvysKx4KEnJz_dPI2OWtxM',
		// 		'refresh_token' => 'ya29.Glt9B1poEHhc_fbkStcQKKngq6Zqi0xBeKap6jPD1yqF-Y8nTQ_hMId60Vkn-7avE3EJZ6XB2k41eUggjvCEpSEwIPfSyXF7F39QB8S0mPKrLXI9L2cXF2hSHd1N',
		// 	]
		// );
		// // dd($authCredentials);
		// $photosLibraryClient = new PhotosLibraryClient(['credentials' => $authCredentials]);
		// $response = $photosLibraryClient->listSharedAlbums();
		// dd($response);
		// foreach ($response->iterateAllElements() as $item) {
		// 	$id = $item->getId();
		// 	// $description = $item->getDescription();
		// 	// $mimeType = $item->getMimeType();
		// 	$productUrl = $item->getProductUrl();
		// 	// $filename = $item->getFilename();
		// 	dd($productUrl);
		// }

		// $client = new Google_Client();
		// dd($client);
	}
}
