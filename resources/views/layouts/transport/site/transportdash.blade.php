@extends('layouts.transport.scafold.main_layout')
@section('main-content')
<div class="container">
 
        <div class="content-wrapper">
                <div class="row purchace-popup">
                    <div class="col-12 stretch-card grid-margin">
                        <div class="card card-secondary">
                            <span class="card-body d-lg-flex align-items-center">
                                <p class="mb-lg-0">
                                     {{ \Auth::user()->name }}, Welcome to your Dashboard 
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
     
</div>
@endsection