@extends('layouts.college.Scaf.admin_layout')
@section('main-content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create new Post</h4>
                    <form class="forms-sample" action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Post name</label>
                            <input type="text" name="post_name" class="form-control" id="exampleInputUsername1" placeholder="Post name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Post Description</label>
                            <textarea class="form-control" name="post_description" id="" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="">Status</label>
                          <select class="form-control" name="status" id="">
                            <option value="">Select</option>
                            <option value="1">Active</option>
                            <option value="0">In Active</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
              </div>
            </div>
          </div>
    </div>
</div>  
@endsection