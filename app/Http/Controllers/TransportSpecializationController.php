<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transport_Specialization;

class TransportSpecializationController extends Controller
{
   
    public function special()
    {
        return view('layouts.transport.site.special');
    }

    public function insert_special(Request $request)
     {  
        // 'trans_id' => \Auth::user()->TransportProfile->trans_id,
        
        \App\Models\Transport_Specialization::create([
            'user_id' => \Auth::user()->user_id,
            'trans_id' => \Auth::user()->user_id,
            'special_route_from' => $request->input('special_route_from'),
            'special_route_to' => $request->input('special_route_to'),
           
         
        ]);
        return redirect()->back()->with('success', 'Route updated!'); 
        return "okok";
        //return redirect()->route('insert.special');
        //return  redirect('/sepcial-route1')->with('success', 'Project  ok');
    }
}
