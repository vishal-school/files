@extends('layouts.business.scafold.main_layout')
@section('main-content')
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3>
                              Load Insert Form
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('insert.route') }}" method="post">
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

                               
    <div class="form-group">
    <label for="name">  Route From<span class="text-danger"> * </span> </label>
    <input type="text" name="route_from" class="form-control" value="{{old('route_from')}}" />
    {!!$errors->first("route_from", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name">  Route To <span class="text-danger"> * </span> </label>
    <input type="text" name="route_to" class="form-control" value="{{old('route_to')}}" />
    {!!$errors->first("route_to", "<span class='text-danger'>:message</span>")!!}
    </div>

                               
                                 <div class="form-group">
    <label for="name">  Truck Body Type<span class="text-danger"> * </span> </label>
    <input type="text" name="body_type" class="form-control" value="{{old('body_type')}}" />
    {!!$errors->first("body_type", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name">  Truck weight<span class="text-danger"> * </span> </label>
    <input type="text" name="truck_weight" class="form-control" value="{{old('truck_weight')}}" />
    {!!$errors->first("truck_weight", "<span class='text-danger'>:message</span>")!!}
    </div>
                                
                                 <div class="form-group">
    <label for="name">  Truck Height<span class="text-danger"> * </span> </label>
    <input type="text" name="truck_height" class="form-control" value="{{old('truck_height')}}" />
    {!!$errors->first("truck_height", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name">  Truck Length <span class="text-danger"> * </span> </label>
    <input type="text" name="truck_length" class="form-control" value="{{old('truck_length')}}" />
    {!!$errors->first("truck_length", "<span class='text-danger'>:message</span>")!!}
    </div>
   


    <div class="form-group">
    <label for="name">  Price<span class="text-danger"> * </span> </label>
    <input type="text" name="price" class="form-control" value="{{old('price')}}" />
    {!!$errors->first("price", "<span class='text-danger'>:message</span>")!!}
    </div>
                                 <!-- Name input --> <div class="form-group">
    <label for="name">  Material<span class="text-danger"> * </span> </label>
    <input type="text" name="material" class="form-control" value="{{old('material')}}" />
    {!!$errors->first("material", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name">  Payment Method<span class="text-danger"> * </span> </label>
    <input type="text" name="payment_method" class="form-control" value="{{old('payment_method')}}" />
    {!!$errors->first("payment_method", "<span class='text-danger'>:message</span>")!!}
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
@endsection