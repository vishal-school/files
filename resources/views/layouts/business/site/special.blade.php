@extends('layouts.college.scafold.main_layout')
@section('main-content')
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3>
                               Special Insert Form
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('insert.special') }}" method="post">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{!! \Session::get('success') !!}</li>
                                    </ul>
                                </div>
                               @endif
                                
                                @if(\Session::has('error'))
                                <div class="alert alert-primary" role="alert">
                                  {{ \Session::get('error') }}
                                </div>
                                @endif

                                <!-- Name input -->
    <div class="form-group">
    <label for="name">Specialization  Route From<span class="text-danger"> * </span> </label>
    <input type="text" name="special_route_from" class="form-control" value="{{old('special_route_from')}}" />
    {!!$errors->first("Special_route_from", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Specialization  Route To <span class="text-danger"> * </span> </label>
    <input type="text" name="special_route_to" class="form-control" value="{{old('special_route_to')}}" />
    {!!$errors->first("special_route_to", "<span class='text-danger'>:message</span>")!!}
    </div>

   

                               
                              
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                              
                                <!-- Register buttons -->
                                <div class="text-center">
                                
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        
    </section>


    <div class="shadow-none p-3 mb-5 bg-light rounded">No shadow</div>
<div class="shadow-sm p-3 mb-5 bg-white rounded">Small shadow</div>
<div class="shadow p-3 mb-5 bg-white rounded">Regular shadow</div>
<div class="shadow-lg p-3 mb-5 bg-white rounded">Larger shadow</div>
@endsection