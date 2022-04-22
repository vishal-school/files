<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
class BusinessController extends Controller
{

      
    public function Business(Request $request)
    {
       

        if($request->isMethod('post')){
            $request->validate([
                
               
                'business_name' => 'required',
                'address' => 'required', 
                'mobile'  => 'required',
                'mobile1' => 'required',
               
                'city'  => 'required',
                'state'  => 'required',
                'country'  => 'required',
                'b_email'  => 'required'
                
            ]);

            

            $login_credentials = [
                'user_id' => \Auth::user('user_id')->user_id,
                
                'business_name' => $request->input('business_name'),
                //'slug' => $this->generateSlug($request->input('business_name')),
                'slug' => $request->input('slug'),
                'gst' => $request->input('gst'),
                'address' => $request->input('address'),
                'mobile' => $request->input('mobile'),
                'mobile1' => $request->input('mobile1'),
                'tagline' => $request->input('tagline'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'conntry' => $request->input('country'),
                'b_email' => $request->input('b_email'),
                'b_rank' => $request->input('b_rank'),
                'recognised' => $request->input('recognised'),
                'business_title' => $request->input('business_title'),
                'business_header' => $request->input('business_header'),
                'business_option' => $request->input('business_option'),
                'business_option1' => $request->input('business_option1'),
                'business_option2' => $request->input('business_option2'),
                
                
            ];

            if (Business::where('user_id', \Auth::user()->user_id,)->exists()) { 
                return redirect()->back()->with('success', 'Data Already exist!');  
            }   

            else
            {
                if(Business::create($login_credentials)){
                
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
        $busi = \App\Models\Business::latest()->get();
        return view('layouts.college.site.view_business',compact('busi'));
    }



    public function viewroutebusiness()
    {
        $business = \App\Models\Business::latest()->get();
        return view('layouts.college.site.view_route',compact('business'));
   
    }

    // public function viewfrontbusiness($business_id)
    // {
    //    $business = \App\Models\Business::where('business_id', $business_id)
    //     ->with('BusinessRoutes')
    //     ->first();
    //     return view('layouts.business.site.frontbusiness',compact('business'));
    //    }
    

       public function viewfrontbusiness($business_id)
       {
          $business = \App\Models\Business::where('business_id', $business_id)
           ->with('BusinessRoutes')
           ->first();
          //return $business;
         return view('layouts.Home.Site.frontbusiness',compact('business'));
      
       }


    public function businessboardview()
    {
        return view('layouts.business.site.businessboard');
    }
    
    
   
    

 


}
