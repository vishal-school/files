<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transport;
class TransportController extends Controller
{

      
    public function transportdata(Request $request)
    {
        

        if($request->isMethod('post')){
            $request->validate([
                
                // 'email' => 'required|email|unique:users,email',
                'transport_name' => 'required',
                'transport_type' => 'required',
                'address' => 'required', 
                'mobile'  => 'required',
                'mobile1' => 'required',
               
                'city'  => 'required',
                'state'  => 'required',
                'country'  => 'required',
                't_email'  => 'required',
              
            ]);

           
            $login_credentials = [
                'user_id' => \Auth::user()->user_id,
                'transport_name' => $request->input('transport_name'),
                'transport_type' => $request->input('transport_type'),
                'Slug' => $request->input('Slug'),
                'gst' => $request->input('gst'),
                'address' => $request->input('address'),
                'mobile' => $request->input('mobile'),
                'mobile1' => $request->input('mobile1'),
                'tagline' => $request->input('tagline'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'country' => $request->input('country'),
                't_email' => $request->input('t_email'),
                't_rank' => $request->input('t_rank'),
                'recognised' => $request->input('recognised'),
                'transport_title' => $request->input('transport_title'),
                'transport_header' => $request->input('transport_header'),
                'transport_option' => $request->input('transport_option'),
                'transport_option1' => $request->input('transport_option1'),
                'transport_option2' => $request->input('transport_option2'),
                
                
            ];
             
            if (Transport::where('user_id', \Auth::user()->user_id,)->exists()) { 
                return redirect()->back()->with('success', 'Data Already exist!');  
            }   

            else
            {
                if(Transport::create($login_credentials)){
                
                return redirect()->back()->with('success', 'Profile updated!');  
                }else{
                    // Return Back ( Message )
                    Session::flash('error','Wrong Credentials');
                    return redirect()->back();
                }

            }

        }
    }
         
    public function index()
    {
        $trans = \App\Models\Transport::latest()->get();
        return view('layouts.college.site.view-transport',compact('trans'));
    }

    public function directory()
    {
        $trans = \App\Models\Transport::latest()->get();
        return view('layouts.transport.site.transportdash',compact('trans'));
    }

    // public function viewtransport(Request $request)
    // {     $city = $request->input('value');
    //     $trans = \App\Models\Transport::where('city', $city)
    //     ->orderBy('trans_id', 'DESC')
    //     ->get();
    //     return view('layouts.college.site.front',compact('trans'));
       
    // }

    public function viewtransport(Request $request)
    {    
        $city = $request->input('value');
        $trans = \App\Models\Transport::where('city', $city)
        ->orderBy('trans_id', 'asc')
        ->get();
        return view('layouts.Home.Site.front',compact('trans','city'));
    }
    // public function viewtransportprofile($trans_id)
    // {    
    //      $trans = \App\Models\Transport::where('trans_id', $trans_id)
    //     ->get();
    //    return view('layouts.college.site.transport_profile',compact('trans'));
     
    // }

    


    // public function viewtransportprofile($trans_id)
    // {    

        //$city = $request->input('trans_id');
    //      $trans = \App\Models\Transport::where('trans_id', $trans_id)
    //      ->with('BusinessRoutes')
    //     ->get();
     // return $trans;
    //     return view('layouts.transport.site.transport_profile',compact('trans'));
      
    // }

    public function viewtransportprofile($trans_id)
    {    

         //$city = $request->input('trans_id');
         $trans = \App\Models\Transport::where('trans_id', $trans_id)
         ->with('TransportSpecial')
         ->first();
   // return $trans;
     return view('layouts.Home.Site.transport_profile_with_special',compact('trans'));
      
    }

    public function transportboardview()
    {
        return view('layouts.transport.site.transportdash');
    }

   
    public function logoutdata()
    {   \Auth::logout();
        return redirect('/home');
    }



}
