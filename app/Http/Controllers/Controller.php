<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // function generateSlug($slug_from)
    // {
    //     $string = preg_replace('/[^A-Za-z0-9. -]/', '', $slug_from);
    //     $slug = str_replace(" ", "-", strtolower($string));
    //     $posts = \App\Models\Posts::where('slug',$slug)->count();
    //     return $slug.'-'.($posts+1);
    // }

    // function generateSlug($slug_from)
    // {
    //     $string = preg_replace('/[^A-Za-z0-9. -]/', '', $slug_from);
    //     $slug = str_replace(" ", "-", strtolower($string));
    //     $posts = \App\Models\Business::where('slug',$slug)->count();
    //     return $slug.'-'.($posts+1);
    // }


    // private function generateSlug($slug_from)
    // {
    //     if (\App\Models\Business::whereSlug($slug = Str::slug($slug_from))->exists()) {
    //         $max = \App\Models\Business::whereName($slug_from)->latest('business_id')->skip(1)->value('slug');
    //         if (isset($max[-1]) && is_numeric($max[-1])) {
    //             return preg_replace_callback('/(\d+)$/', function($mathces) {
    //                 return $mathces[1] + 1;
    //             }, $max);
    //         }
    //         return "{$slug}-2";
    //     }
    //     return $slug;
    // }    

    public function fileUpload($request,$column_name = null)
    {
        $file = (!empty($column_name)) ? $request->file($column_name) : $request->file('file');
        $filename = $file->getClientOriginalName();
        $destination = public_path().'/images/uploads/'.date('Y').'/'.date('M');
        $upload_success = $file->move($destination,$filename);
        return ($upload_success) ? '/images/uploads/'.date('Y').'/'.date('M').'/'.$filename : null;
    }
}