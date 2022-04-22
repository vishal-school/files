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
                               Course Insert Form
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
    <label for="name"> Course (BA/MA)<span class="text-danger"> * </span> </label>
    <input type="text" name="course" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("course", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Course type(Degree/Diploma) <span class="text-danger"> * </span> </label>
    <input type="text" name="course_type" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("course_type", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Course mode(on campus/online) <span class="text-danger"> * </span> </label>
    <input type="text" name="course_mode" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("course_mode", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Course Time (full time/part time/distance) <span class="text-danger"> * </span> </label>
    <input type="text" name="course_time" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("course_time", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Fees <span class="text-danger"> * </span> </label>
    <input type="text" name="fees" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("fees", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Duration <span class="text-danger"> * </span> </label>
    <input type="text" name="duration" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("duration", "<span class='text-danger'>:message</span>")!!}
    </div>

    <div class="form-group">
    <label for="name"> Eligibility <span class="text-danger"> * </span> </label>
    <input type="text" name="eligibility" class="form-control" value="{{old('mobile')}}" />
    {!!$errors->first("eligibility", "<span class='text-danger'>:message</span>")!!}
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