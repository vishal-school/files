<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main_photocontroller extends Controller
{
    public function Home()
    {

        // Get alll the Sessions
        // return session()->all();
        $test = false;
        $val = ($test) ? $val1 : null;
        $variable = $val ?? "default_value";
        // return $variable;
        $posts = \App\Models\photo::where('status',1)->get();
        return view('photo.photohome',compact('posts'));
    }

    public function BlogDetail($slug)
    {
        $blog_detail = \App\Models\photo::where('slug',$slug)->first();
        return view('photo.photo-read',compact('blog_detail'));
    }
}