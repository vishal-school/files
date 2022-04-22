<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainSiteController extends Controller
{
    public function Home()
    {
        return view('layouts.Home.Site.home');
    }
   

    public function logoutdata()

    {     \Session::flush();
           \Auth::logout();
        return redirect('/home');
    }

}
 
