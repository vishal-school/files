@extends('layouts.transport.scafold.main_layout')
@section('main-content')

<div class="container ">
        <div class="row mx-auto">
            <div class="content-wrapper">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">
                        <!-- List of Transport in  -->
                        <span class="float-right">
                            <!-- <a class="btn btn-primary" href="" role="button">Add New </a> -->
                        </span>
                        </h4>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                            <th> Name </th>
                                <th> Address </th>
                                <th> Mobile </th>
                                <th> Mobile </th>
                                <th> City </th>
                                <th> State </th>
                                <th> Email </th>
                            </tr>    
                            </thead>
                            <tbody>
                                @if (count($trans) > 0 )
                                    @foreach ($trans as $transport)
                                            
   
                                                    <tr> 
                                                    <td>{{ $transport->trans_id }}</td>
                                                    <td><a href="{{ url('transport_profile',$transport->trans_id) }}" >{{ $transport->transport_name }} </a></td>
                                                    <td>{{ $transport->address }}</td>
                                                    <td>{{ $transport->mobile }}</td>
                                                    <td>{{ $transport->mobile1 }}</td>
                                                    <td>{{ $transport->city }}</td>
                                                    <td>{{ $transport->state }}</td>
                                                    <td>{{ $transport->country }}</td>
                                                    <td>{{ $transport->t_email }}</td>
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
