@extends('layouts.college.scafold.main_layout')
@section('main-content')
<section>
        <div class="container-fluid  p-3 mb-2 bg-secondary text-black">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3>
                                User Registration Form
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('insert.transport') }}" method="post">
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
    <label for="name"> Email <span class="text-danger"> * </span> </label>
    <input type="text" name="email" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("email", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Transport Name <span class="text-danger"> * </span> </label>
    <input type="text" name="transport_name" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("transport_name", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Address <span class="text-danger"> * </span> </label>
    <input type="text" name="address" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("address", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Mobile <span class="text-danger"> * </span> </label>
    <input type="text" name="mobile" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("mobile", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Mobile1 <span class="text-danger"> * </span> </label>
    <input type="text" name="mobile1" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("mobile1", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Tagline <span class="text-danger"> * </span> </label>
    <input type="text" name="tagline" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("tagline", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> CIty <span class="text-danger"> * </span> </label>
    <input type="text" name="city" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("city", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> State <span class="text-danger"> * </span> </label>
    <input type="text" name="state" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("state", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Country <span class="text-danger"> * </span> </label>
    <input type="text" name="country" class="form-control" value="{{old('country')}}" />
    {!!$errors->first("country", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Transport Email <span class="text-danger"> * </span> </label>
    <input type="text" name="t_email" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("t_email", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Transport Rank <span class="text-danger"> * </span> </label>
    <input type="text" name="t_rank" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("t_rank", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name">Recognised <span class="text-danger"> * </span> </label>
    <input type="text" name="recognised" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("recognised", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> transport_title <span class="text-danger"> * </span> </label>
    <input type="text" name="transport_title" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("transport_title", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> transport_header <span class="text-danger"> * </span> </label>
    <input type="text" name="transport_header" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("transport_header", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> transport_option <span class="text-danger"> * </span> </label>
    <input type="text" name="transport_option" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("transport_option", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> transport_option1 <span class="text-danger"> * </span> </label>
    <input type="text" name="transport_option1" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("transport_option1", "<span class='text-danger'>:message</span>")!!}
    </div>
    <div class="form-group">
    <label for="name"> transport_option2 <span class="text-danger"> * </span> </label>
    <input type="text" name="transport_option2" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("transport_option2", "<span class='text-danger'>:message</span>")!!}
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