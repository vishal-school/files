@extends('layouts.Admin.Scaf.admin_layout')
@section('admin-content')
<div class="row">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">
                  Posts List
                  <span class="float-right">
                      <a class="btn btn-primary" href="{{ route('tests.create') }}" role="button">Add New </a>
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
                        @if (count($Tests) > 0 )
                            @foreach ($Tests as $test)
                                <tr>
                                    <td>{{ $test->name }}</td>
                                    <td>{{ $test->description }}</td>
                                    <td>
                                        @if (!empty($test->image))
                                            <img src="{{ url($test->image) }}" class="" >
                                        @endif
                                    </td>
                                    <td></td>
                                    <td>
                                        @if ($test->status == 1)
                                            <label class="badge badge-success">Active</label>
                                        @else
                                            <label class="badge badge-danger">In-Active</label>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('tests.edit',$test->id) }}" class="btn btn-primary btn-rounded">
                                            Edit
                                        </a>
                                        <form action="{{ route('tests.destroy',$test->id) }}" method="post">
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