@extends('layouts.business.scafold.main_layout')
@section('main-content')
<div class="container ">
        <div class="row mx-auto justify-content-center">
            <div class="content-wrapper">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title text-center"><b>
                          Business Detail and Specialist Route   </b> 
                        <span class="float-right">
                            <!-- <a class="btn btn-primary" href="" role="button">Add New </a> -->
                        </span>
                        </h4>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                            <th> Business Name </th>
                                <th> Address </th>
                                <th> Mobile </th>
                                <th> Mobile </th>
                                <th> City </th>
                                <th> State </th>
                                <th> Email </th>
                            </tr>
                            </thead>
                            <tbody>
                               
                                    
                                    <tr>
                                            <td>{{ $business->business_name }}</td>
                                            <td>{{ $business->address }}</td>
                                            <td>{{ $business->mobile }}</td>
                                            <td>{{ $business->mobile1 }}</td>
                                            <td>{{ $business->city }}</td>
                                            <td>{{ $business->state }}</td>
                                            <td>{{ $business->b_email }}</td>
                                            
                                         </tr>

             <tr><td><b> Posted Load </b> </td></tr>                     
             <tr>
                                <th> Load From</th>
                                <th> Laod To </th>
                                <th> Truck Body Type</th>
                                <th> Truck Weight </th>
                                <th> Truck Height </th>
                                <th> Truck Length</th>
                                <th> Price </th>
                                <th> Material </th>
                                <th> Payment </th>
                            </tr>
             <tr>
                                        @if (count($business->BusinessRoutes) > 0 )
                   @foreach($business->BusinessRoutes as $routes)

                                           <td>{{ $routes->route_from }}</td>
                                            <td>{{ $routes->route_to }}</td>
                                            <td>{{ $routes->body_type }}</td>
                                            <td>{{ $routes->truck_weight }}</td>
                                            <td>{{ $routes->truck_height }}</td>
                                            <td>{{ $routes->truck_length }}</td>
                                            <td>{{ $routes->price}}</td>
                                            <td>{{ $routes->material }}</td>
                                            <td>{{ $routes->payment_method }}</td>

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