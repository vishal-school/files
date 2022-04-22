@extends('layouts.business.scafold.main_layout')
@section('main-content')
<div class="container ">
        <div class="row mx-auto justify-content-center">
            <div class="content-wrapper">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body text-center">
                        <h4 class="card-title">
                       List Loads 
                        <span class="float-right">
                            <!-- <a class="btn btn-primary" href="" role="button">Add New </a> -->
                        </span>
                        </h4>
                        <table class="table table-striped">
                            <thead>
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
                            </thead>
                            <tbody>
                              
                                    @foreach ($trans as $routes)
                                        <tr>
                                            
                                            
                                            <td>{{ $routes->route_from }}</td>
                                            <td>{{ $routes->route_to }}</td>
                                            <td>{{ $routes->body_type }}</td>
                                            <td>{{ $routes->truck_weight }}</td>
                                            <td>{{ $routes->truck_height }}</td>
                                            <td>{{ $routes->truck_length }}</td>
                                            <td>{{ $routes->price}}</td>
                                            <td>{{ $routes->material }}</td>
                                            <td>{{ $routes->payment_method }}</td>
                                            
                                         
                                         
                                    <td> 
                                          
                                    <a href="{{ route('deleteid.route',$routes->routes_id) }}" class="btn btn-danger btn-rounded">
                                                Delete
                                            </a>        
                                            
                                         
                                    </td> 
                                        </tr>
                                    @endforeach
                          
                                        <tr>
                                            
                                        </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>

</div>
@endsection