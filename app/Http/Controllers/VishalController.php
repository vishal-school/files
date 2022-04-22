<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
class VishalController extends Controller
{
   
    public function vishalRegister(Request $request)
    {
        if($request->isMethod('get')){
            return view('layouts.Auth.MainPages.vishal_register');
        }

        if($request->isMethod('post')){
            $request->validate([
                'name' => 'required|min:6',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:5'
            ]);

            // return $request->all();
            // Way 1 of Storing Data
            // $user = new \App\User;
            // $user->name = $request->input('name');
            // $user->email = $request->input('name');
            // $user->password = bcrypt($request->input('password'));
            // $user->save();

            // Way 2:- 
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password'))
            ]);

            $login_credentials = [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'user_type' => 2
            ];

            if(Auth::attempt($login_credentials)){
                // Redirect User to User profile page
                return redirect()->route('vishal.dashboard');
            }else{
                // Return Back ( Message )
                Session::flash('error','Wrong Credentials');
                return redirect()->back();
            }

            // Way 3:- 
            // $user = \App\User::insert([
            //     'name' => $request->input('name'),
            //     'email' => $request->input('email'),
            //     'password' => bcrypt($request->input('password')),
            // ]);

        }
    }

    public function vishalLogin(Request $request)
    {
        if($request->isMethod('get')){
            return view('layouts.Auth.MainPages.vishal_login');
        }

        if($request->isMethod('post')){
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);

            $login_credentials = [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'user_type' => 2
            ];

            if(Auth::attempt($login_credentials)){
                // Redirect User to User profile page
                return redirect()->route('vishal.dashboard');
            }else{
                // Return Back ( Message )
                Session::flash('error','Wrong Creedentials');
                return redirect()->back();
            }

        }
    }
}
