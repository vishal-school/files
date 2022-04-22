<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tests = \App\Models\Tests::latest()->get();
        return view('layouts.Admin.pannel.tests.index',compact('Tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.Admin.pannel.tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if ($request->hasFile('user_image')) {
            $image = $this->fileUpload($request,'user_image');
        }else
        {
            $image = null;
        }

        \App\Models\tests::create([
            'name' => $request->input('post_name'),
            'slug' => $this->generateSlug($request->input('post_name')),
            'description' => $request->input('post_description'),
            'image' => $image,
            'status' => $request->input('status'),
        ]);

        return redirect()->route('tests.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = \App\Models\Tests::findOrFail($id);
        // return $post = \App\Models\Posts::where('id',$id)->first();
        // return $post = \App\Models\Posts::latest()->first();
        // return $post = \App\Models\Posts::where('status',1)->orderBy('id','desc')->first();
        return view('layouts.Admin.pannel.tests.edit',compact('test'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request->all();
        // method 1:- 
        // $post = \App\Models\Posts::where('id',$id)->get();
        // $post[0]->name = $request->input('post_name');
        // $post[0]->description = $request->input('post_description');
        // $post[0]->status = $request->input('status');
        // $post[0]->save();
        // Method 2:- 

        $image = (!empty($request->input('old_image'))) ? $request->input('old_image') : null ;
        
        if ($request->hasFile('blog_image')) {
            if(!empty($image)){
                unlink(public_path().$image);
            }
            $image = $this->fileUpload($request,'blog_image');
        }

        \App\Models\tests::where('id',$id)->update([
            'name' => $request->input('post_name'),
            'slug' => $this->generateSlug($request->input('post_name')),
            'description' => $request->input('post_description'),
            'image' => $image,
            'status' => $request->input('status'),
        ]);

        return redirect()->route('tests.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //\App\Models\Posts::where('id',$id)->update(['status' => 0 ]);

        //return redirect()->route('posts.index');
    }
}