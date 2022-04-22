@extends('layouts.Home.Scafolding.main_layout')
@section('main-content')
<div class="container">
<p>

<img src="images\uploads\truck4.jpg" class="img-fluid" alt="Responsive image">
</p>


<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->





<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<div class="container-fluid"  >
 <h2 ></h2>
  <!-- <div class="panel panel-default "> -->
   <!-- <div class="panel-heading    "  style="background-image: url('pics/bg.jpg'); no-repeat  ">ENGLISH</div>-->
    <!-- <div class="panel-heading    bg-info text-white "> <h4  > Features </h4></div> -->
   

<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
 <div class="row  p-5 pt-2 mt-1 "> 
 
 
                  <div class="col-sm-4">
                      <div class="card mb-3   shadow-lg p-3 mb-5 bg-white rounded" >
                          <div class="card-header bg-info text-white">Tranport Directory</div>
                                
                              <div class="card-body">
                                <h4 class="card-title pl-2" >Find top Tranports in your city</h4>
                                  <p class="card-text"></p>
                                  <a href="{{ url('online_directory') }}" class="btn btn-primary">Find Tranport </a>
                              </div>
                      </div>
                  </div>
                
                <div class="col-sm-4">
                    <div class="card mb-3   shadow-lg p-3 mb-5 bg-white rounded" >
                        <div class="card-header bg-info text-white">Book Load </div>
                              
                            <div class="card-body">
                              <h4 class="card-title pl-2" >Find loads in easy steps </h4>
                                <p class="card-text"></p>
                                <a href="{{ url('/find_loads') }}" class="btn btn-primary">Find Laods</a>
                            </div>
                    </div>
                </div>

              
                <div class="col-sm-4">
                    <div class="card mb-3   shadow-lg p-3 mb-5 bg-white rounded" >
                        <div class="card-header bg-info text-white">Post Your Load</div>
                              
                            <div class="card-body">
                              <h4 class="card-title pl-2">Business man can post load</h4>
                                <p class="card-text">Before Post the load kindly login in business account</p>
                                <!-- <a href="head-of-school.php" class="btn btn-primary">Post Load</a> -->
                            </div>
                    </div>
                </div>

</div>
<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
 
<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
 
<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->





<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</div>
<!-- </div></div> -->
<!-----------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->




@endsection