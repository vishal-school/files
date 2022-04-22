@extends('layouts.Admin.Scaf.admin_layout')
@section('admin-content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Post</h4>
                    <form class="forms-sample" action="{{ route('tests.update',$test->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="exampleInputUsername1">Post name</label>
                            <input type="text" 
                                    name="post_name" 
                                    class="form-control" 
                                    value="{{ $test->name }}"
                                    id="post_name" 
                                    placeholder="Post name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Post Description</label>
                            <textarea class="form-control" 
                                        name="post_description" id="" rows="3">{{ $test->description }}</textarea>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            @if (!empty($test->image))
                              <img src="{{ url($test->image) }}" class="img-fluid" alt="">
                            @endif
                            <input type="hidden" name="old_image" value="{{ $test->image }}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="">Post Image</label>
                          <input type="file" class="form-control" name="blog_image">
                        </div>
                        <div class="form-group">
                          <label for="">Status</label>
                          <select class="form-control" name="status" id="">
                            <option value="">Select</option>
                            <option value="1" {{ ($test->status==1) ? 'selected' : null }}>Active</option>
                            <option value="0" {{ ($test->status==0) ? 'selected' : null }}>In Active</option>
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