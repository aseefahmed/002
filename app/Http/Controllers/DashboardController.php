<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function viewdashboard()
    {
        if(Auth::check())
        {
                return view('dashboard.dashboard');
        }
        else
        {
                return view('login::index');
        }
        
    }

    public function doLogout()
    {
        Auth::logout();

        return Redirect::to('/login');
    }
}
