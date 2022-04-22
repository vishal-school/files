@extends('layouts.Home.Scafolding.main_layout')
@section('main-content')
<div class="container">
    <div class="row">
    <div class="col-4"> </div> 
    
    <div class="col-6">
             <p class="text-justify   font-weight-bold">
               Fill City and View Online Transport Directory.
            </p>
    </div>  
    <div class="col-2"></div>      
    </div>

</div>


<div class="container">
<nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="{{ url('/front_transport') }}" method="post">
    @csrf
    <input class="form-control mr-sm-2" style="width: 100% " name="value"  type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
</div>

@endsection