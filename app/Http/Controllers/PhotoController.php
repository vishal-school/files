<?php

namespace App\Http\Controllers;
    
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    
    class PhotoController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $posts = \App\Models\Posts::latest()->get();
            return view('layouts.Admin.pannel.Posts.index',compact('posts'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('layouts.Admin.pannel.Posts.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {   
            $gallery_images = [];
    
            if ($request->hasFile('blog_image')) {
                $image = $this->fileUpload($request,'blog_image');
            }else{
                $image = null;
            }
    
            if ($request->hasFile('gallery_images')) {
                foreach ($request->file('gallery_images') as $key => $file) {
                    $filename = $file->getClientOriginalName();
                    $destination = public_path().'/images/uploads/'.date('Y').'/'.date('M');
                    $upload_success = $file->move($destination,$filename);
                    if($upload_success){
                        array_push($gallery_images,'/images/uploads/'.date('Y').'/'.date('M').'/'.$filename);
                    }
                }
                
            }else{
                $image = null;
            }
    
            \App\Models\photo::create([
                'name' => $request->input('post_name'),
                'slug' => $this->generateSlug($request->input('post_name')),
                'description' => $request->input('post_description'),
                'image' => $image,
                'gallery_images' => json_encode($gallery_images),
                'status' => $request->input('status'),
            ]);
    
            return redirect()->back();
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
            $post = \App\Models\Posts::findOrFail($id);
            // return $post = \App\Models\Posts::where('id',$id)->first();
            // return $post = \App\Models\Posts::latest()->first();
            // return $post = \App\Models\Posts::where('status',1)->orderBy('id','desc')->first();
            return view('layouts.Admin.pannel.Posts.edit',compact('post'));
    
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
    
            \App\Models\Posts::where('id',$id)->update([
                'name' => $request->input('post_name'),
                'slug' => $this->generateSlug($request->input('post_name')),
                'description' => $request->input('post_description'),
                'image' => $image,
                'status' => $request->input('status'),
            ]);
    
            return redirect()->route('posts.index');
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            \App\Models\Posts::where('id',$id)->update(['status' => 0 ]);
    
            return redirect()->route('posts.index');
        }
    }