@extends('layouts.college.scafold.main_layout')
@section('main-content')
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
                                            <td>{{ $busi->business_name }}</td>
                                            <td>{{ $busi->address }}</td>
                                            <td>{{ $busi->mobile }}</td>
                                            <td>{{ $busi->mobile1 }}</td>
                                            <td>{{ $busi->city }}</td>
                                            <td>{{ $busi->state }}</td>
                                            <td>{{ $busi->country }}</td>
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