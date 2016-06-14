<?php namespace Modules\Login\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Pingpong\Modules\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller {
	
	public function index()
	{
		if(Auth::check())
		{
			return Redirect::to('/dashboard');
		}
		else
		{
			return view('login::index');
		}
	}

	public function processLogin(Request $request)
	{
		$user = array(
				'email' =>$request->email,
				'password' => $request->password,
			);

		if(Auth::attempt($user))
		{
                        $user = DB::table('users')
                                ->join('employees', 'users.email', '=', 'employees.email')
                                ->join('designations', 'users.designation_id', '=', 'designations.id')
                                ->where('users.id', Auth::user()->id)
                                ->select('designations.designation_name', 'employees.*')
                                ->get();
                        
                        $request->session()->put('emp_designation', $user[0]->designation_name);
                        $request->session()->put('profile_pic', $user[0]->photo);
                        
			return Redirect::to('/dashboard');
		}
		else
		{
			echo "failed";
		}
	}

	
}