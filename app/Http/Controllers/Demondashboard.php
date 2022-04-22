<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Demondashboard extends Controller
{
    public function Demo1()
    {
        return Auth::user();
        return 'User Dashboard Redirect';
    }

    public function Admin1()
    {
        return Auth::user();
        return 'This is Admin Dashboard';
    }
}
