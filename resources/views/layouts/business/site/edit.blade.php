@extends('layouts.college.Scaf.admin_layout')
@section('main-content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Post</h4>
                    <form class="forms-sample" action="{{ route('posts.update',$post->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="exampleInputUsername1">Post name</label>
                            <input type="text" 
                                    name="post_name" 
                                    class="form-control" 
                                    value="{{ $post->name }}"
                                    id="post_name" 
                                    placeholder="Post name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Post Description</label>
                            <textarea class="form-control" 
                                        name="post_description" id="" rows="3">{{ $post->description }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="">Status</label>
                          <select class="form-control" name="status" id="">
                            <option value="">Select</option>
                            <option value="1" {{ ($post->status==1) ? 'selected' : null }}>Active</option>
                            <option value="0" {{ ($post->status==0) ? 'selected' : null }}>In Active</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
              </div>
            </div>
          </div>
    </div>
</div>  
@endsection