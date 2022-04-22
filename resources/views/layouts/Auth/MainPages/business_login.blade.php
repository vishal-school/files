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
                                Business Login Form
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business.login') }}" method="post">
                                @csrf

                                @if(\Session::has('error'))
                                <div class="alert alert-primary" role="alert">
                                  {{ \Session::get('error') }}
                                </div>
                                @endif

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
                              
                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                  <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <!-- <div class="form-check">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="form2Example31"
                                        checked
                                      /> -->
                                      <!-- <label class="form-check-label" for="form2Example31"> Remember me </label> -->
                                    </div>
                                  </div>
                              
                                  <div class="col">
                                    <!-- Simple link -->
                                    <!-- <a href="#!">Forgot password?</a> -->
                                  </div>
                                </div>
                              
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                              
                                <!-- Register buttons -->
                                <div class="text-center">
                                  <!-- <p>Not a member? <a href="{{ route('business.register') }}">Register</a></p>
                                  -->
                                  <!-- <p>or sign up with:</p> -->
                                  <!-- <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                  </button>
                              
                                  <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                  </button>
                              
                                  <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                  </button>
                              
                                  <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                  </button> -->
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

