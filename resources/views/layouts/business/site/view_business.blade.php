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
                                @if (count($busi) > 0 )
                                    @foreach ($busi as $business)
                                        <tr>
                                            <td>{{ $business->business_name }}</td>
                                            <td>{{ $business->address }}</td>
                                            <td>{{ $business->mobile }}</td>
                                            <td>{{ $business->mobile1 }}</td>
                                            <td>{{ $business->city }}</td>
                                            <td>{{ $business->state }}</td>
                                            <td>{{ $business->country }}</td>
                                            <td>{{ $business->b_email }}</td>
                                            <td>
                                                
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