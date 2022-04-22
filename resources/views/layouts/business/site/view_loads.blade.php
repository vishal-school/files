@extends('layouts.business.scafold.main_layout')
@section('main-content')
<div class="container">
<nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="{{ url('/find_loads') }}" method="post">
    @csrf
    <input class="form-control mr-sm-2" style="width:100% " name="value"  type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
</div>
<div class="container ">
        <div class="row mx-auto">
            <div class="content-wrapper">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">
                        Posts List
                       <span class="float-right">
                            <a class="btn btn-primary" href="" role="button">Add New </a>
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
                                @if (count($business) > 0 )
                                    @foreach ($business as $busi)
                                        <tr>
                                        <!-- <td><a href="{{ url('business_profile',$busi->trans_id) }}" >{{ $busi->business_name }} </a></td> -->
                                        <td>{{ $busi->route_from }}</td>
                                            <td>{{ $busi->route_to }}</td>
                                            <td>{{ $busi->body_type }}</td>
                                            <td>{{ $busi->truck_weight }}</td>
                                            <td>
                                                <!-- @if (!empty($post->image))
                                                    <img src="{{ url($post->image) }}" class="" >
                                                @endif -->
                                            </td>
                                            <td></td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                            
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

</div>
@endsection