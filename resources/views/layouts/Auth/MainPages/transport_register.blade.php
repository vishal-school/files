@extends('layouts.Auth.main_login_layout')
@section('main-content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3>
                               Transport Registration Form
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('transport.register') }}" method="post">
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
                                @if(\Session::has('error'))
                                <div class="alert alert-primary" role="alert">
                                  {{ \Session::get('error') }}
                                </div>
                                @endif

                                <!-- Name input -->
                                <div class="form-outline mb-4">
                                  <input type="text" name="name" id="form2Example3" class="form-control" placeholder="Name" required/>
                                  <label class="form-label" for="form2Example1">Name</label>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                  <input type="email" name="email" id="form2Example1" class="form-control" required/>
                                  <label class="form-label" for="form2Example1">Email address</label>
                                </div>
                              
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                  <input type="password" name="password" id="form2Example2" class="form-control" required/>
                                  <label class="form-label" for="form2Example2">Password</label>
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                  <input type="password" name="password_confirmation" id="form2Example2" class="form-control" required/>
                                  <label class="form-label" for="form2Example2">Confirm Password</label>
                                </div>
                              
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                              
                                <!-- Register buttons -->
                                <!-- <div class="text-center">
                                  <p>Aleready a member? <a href="{{ route('transport.login') }}">Login</a></p>
                                </div> -->
                            </form>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        
    </section>
@endsection