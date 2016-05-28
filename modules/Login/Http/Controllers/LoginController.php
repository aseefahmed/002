<?php namespace Modules\Login\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Pingpong\Modules\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller {
	
	public function index()
	{
		return view('login::index');
	}

	public function processLogin(Request $request)
	{
		$user = array(
				'email' =>$request->email,
				'password' => $request->password,
			);

		if(Auth::attempt($user))
		{
			return Redirect::to('/dashboard');
		}
		else
		{
			echo "failed";
		}
	}

	
}