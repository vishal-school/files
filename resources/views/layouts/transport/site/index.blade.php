@extends('layouts.college.Scaf.admin_layout')
@section('main-content')
<div class="row">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">
                  Posts List
                  <span class="float-right">
                      <a class="btn btn-primary" href="{{ route('posts.create') }}" role="button">Add New </a>
                  </span>
                </h4>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th> Name </th>
                        <th> Description </th>
                        <th> Image </th>
                        <th> Views </th>
                        <th> Status </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                        @if (count($posts) > 0 )
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->name }}</td>
                                    <td>{{ $post->description }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        @if ($post->status == 1)
                                            <label class="badge badge-success">Active</label>
                                        @else
                                            <label class="badge badge-danger">In-Active</label>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary btn-rounded">
                                            Edit
                                        </a>
                                        <form action="{{ route('posts.destroy',$post->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-rounded">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                                <tr>
                                    <td colspan="6" class="text-center"> No Record Found.</td>
                                </tr>
                        @endif
                    </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection