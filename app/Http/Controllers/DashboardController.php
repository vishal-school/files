<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
class DashboardController extends Controller
{
    public function UserDashboard()
    {
        return Auth::user();
        return 'User Dashboard Redirect';
    }

    public function AdminDashboard()
    {
        //return \Auth::user();
        //return 'This is Admin Dashboard';
        return view('layouts.Admin.pannel.dashboard');
    }
}
