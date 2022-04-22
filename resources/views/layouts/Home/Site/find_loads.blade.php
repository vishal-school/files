@extends('layouts.Home.Scafolding.main_layout')
@section('main-content')
<div class="container">
    <div class="row justify-content-start">
                <div class="col-5">  
                  <h4 class="text-center">Find Load from City to another city </h4>
                        <nav class="navbar navbar-light bg-light">
                          <form class="form-inline" action="{{ url('/find_loads') }}" method="post">
                            @csrf
                            <input class="form-control mr-sm-2" style="width:100% " name="value"  type="search" placeholder="Find Loads From City" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                          </form>
                        </nav>
                </div>
            
                <div class="col-1">OR</div>  


            <div class="col-6">  
            <h4 class="text-center">Find Load between Two City </h4>
                <nav class="navbar navbar-light bg-light">
                  <form class="form-inline" action="{{ url('/find_two_loads') }}" method="post">
                    @csrf
                    <input class="form-control mr-sm-2" style="width:100% " name="value"  type="search" placeholder="Find Loads From City" aria-label="Search">
                    <input class="form-control mr-sm-2" style="width:100% " name="value1"  type="search" placeholder="Find Loads To City" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </nav>
            </div>

    </div>

</div>

<div class="container ">
        <div class="row mx-auto  justify-content-center">
            <div class="content-wrapper">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title text-center"><b>
                         Loads   </b> 
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
                                @if (count($business) > 0 )
                                    @foreach ($business as $busi)
                                        <tr>
                                        <!-- <td><a href="{{ url('business_profile',$busi->trans_id) }}" >{{ $busi->business_name }} </a></td> -->
                                            <td>{{ $busi->route_from }}</td>
                                            <td>{{ $busi->route_to }}</td>
                                            <td>{{ $busi->body_type }}</td>
                                            <td>{{ $busi->truck_weight }}</td>
                                            <td>{{ $busi->truck_height }}</td>
                                            <td>{{ $busi->truck_length }}</td>
                                            <td>{{ $busi->price}}</td>
                                            <td>{{ $busi->material }}</td>
                                            <td>{{ $busi->payment_method }}</td>


                        <td>
                             <span class="float-right">
                               <a class="btn btn-primary" href=" {{ url('business_profile',$busi->business_id) }}" role="button">Contact </a> 
                             </span>
                       </td>


                                            <td>
                                                <!-- @if (!empty($post->image))
                                                    <img src="{{ url($post->image) }}" class="" >
                                                @endif -->
                                            </td>
                                      
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