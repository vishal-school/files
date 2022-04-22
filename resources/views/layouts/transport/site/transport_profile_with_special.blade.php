@extends('layouts.transport.scafold.main_layout')
@section('main-content')

<div class="container ">
        <div class="row mx-auto  justify-content-center">
            <div class="content-wrapper">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title text-center"><b>
                          Transport Detail and Specialist Route   </b>  
                        <span class="float-right">
                            <!-- <a class="btn btn-primary" href="" role="button">Add New </a> -->
                        </span>
                        </h4>
                        <table class="table table-striped ">
                            <thead>
                            <tr>
                                <th> Transport Name </th>
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
                                                    <td>{{  $trans->transport_name }} </td>
                                                    <td>{{ $trans->address }}</td>
                                                    <td>{{ $trans->mobile }}</td>
                                                    <td>{{ $trans->mobile1 }}</td>
                                                    <td>{{ $trans->city }}</td>
                                                    <td>{{ $trans->state }}</td>
                                                    <td>{{ $trans->t_email }}</td>
                                                    <td>
                                          </tr>   
                                          
                                         
                                  <tr><td><b> Specialist Route </b> </td></tr>
                                          
                                        <br><br>

                                        
                   @foreach($trans->TransportSpecial as $routes)
                                 <tr> 

                                 <td>     {{ $routes->special_route_from  }}   </td> 
                                 <td>     {{ $routes->special_route_to  }}   </td> 
                                 
                                            
                                </tr>
                                    @endforeach
                                  
                                   
                              
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>

</div>




@endsection
