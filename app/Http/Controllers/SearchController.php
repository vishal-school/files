<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transport;
class SearchController extends Controller
{
   
    public function index()
    {
        return view('layouts.college.site.search');
    }
  
    
    public function autocomplete(Request $request)
    {
        $datas = Transport::select("city")
        ->where("city","LIKE","%{$request->input('query')}%")
        ->get();
             $dataModified = array();
                   foreach ($datas as $data)
         {
           $dataModified[] = $data->city;
         }

     return response()->json($dataModified);
    }

    public function auto(Request $request)
    {
        $data = Transport::select("city")
                ->where("city","LIKE","%{$request->query}%")
                ->get();
   
        return response()->json($data);
    }
}