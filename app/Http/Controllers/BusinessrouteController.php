<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\businessroute;

class BusinessrouteController extends Controller
{
    public function special()
    {
        return view('layouts.college.site.route_insert');
    }

    public function insert_route(Request $request)
    {  
           //return \Auth::user()->businessprofile;

        \App\Models\businessroute::create([
            'user_id' => \Auth::user()->user_id,
            'business_id' => \Auth::user()->user_id,
            'route_from' => $request->input('route_from'),
            'route_to' => $request->input('route_to'),
            'body_type' => $request->input('body_type'),
            'truck_weight' => $request->input('truck_weight'),
            'truck_height' => $request->input('truck_height'),
            'truck_length' => $request->input('truck_length'),
            'price' => $request->input('price'),
            'material' => $request->input('material'),
            'payment_method' => $request->input('payment_method'),
            
           
         
        ]);
        return redirect()->back()->with('success', 'Route updated!'); 
        return "okok";
        //return redirect()->route('insert.special');
        //return  redirect('/sepcial-route1')->with('success', 'Project  ok');
    }

  
    public function  viewloads(Request $request)
    {    
        $city = $request->input('value');
        $business = \App\Models\businessroute::where('route_from', $city)
        ->orderBy('routes_id', 'DESC')
        ->get();
        // return view('layouts.business.site.view_loads',compact('business','city'));
        return view('layouts.Home.Site.find_loads',compact('business','city'));
    }

    public function  viewtwoloads(Request $request)
    {    
        $city = $request->input('value');
        $city1 = $request->input('value1');
        $business = \App\Models\businessroute::where('route_from', $city)
         ->where('route_to', $city1)
        ->orderBy('routes_id', 'DESC')
        ->get();
        // return view('layouts.business.site.view_loads',compact('business','city'));
        return view('layouts.Home.Site.find_loads',compact('business','city'));
    }




      public function  routewithid(Request $request)
    {    
        $city = $request->input('value');
        $business = \App\Models\businessroute::where('route_from', $city)
        ->orderBy('routes_id', 'DESC')
        ->get();
        // return view('layouts.business.site.view_loads',compact('business','city'));
        return view('layouts.business.site.find_loads',compact('business','city'));
    }


    // public function routedelete(Request $request)
    // {
    //     $data = $request->input('value');
    //     return $data;
    //     $project = \App\Models\businessroute::findOrFail($request->routes_id);
    //     $project->delete();
       
    //     return redirect()->back()->with('success', 'Route Delete!'); 
    // }
    
    public function routedelete()
    {
        $user_id = \Auth::user()->user_id;
       // return $user_id;
        $trans = \App\Models\businessroute::where('user_id', $user_id)
       ->get();
        return view('layouts.business.site.list_routes',compact('trans'));
    }
   
    public function routedeleteid($id)
    {
       
        $trans = \App\Models\businessroute::where('routes_id', $id)->delete();

       
       return redirect()->back()->with('success', ' Record Deleted');
    }



    
}
