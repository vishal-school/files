<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VishalAdminController extends Controller
{
    public function vishalUser()
    {
        return \Auth::user();
        return 'User Dashboard Redirect';
    }

    // public function Admin1()
    // {
    //     return Auth::user();
    //     return 'This is Admin Dashboard';
    // }
}
