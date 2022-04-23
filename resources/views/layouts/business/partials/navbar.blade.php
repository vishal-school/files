<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<link rel="stylesheet" href="drop.css" type="text/css">
<link rel="stylesheet" href="jspfile.js" type="text/javascript">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <title></title>
  <style>
    .dropdown:hover .dropdown-menu {
  display: block;
}
    </style>
  <style>
            .navcolor{
  background-color: #247881;
}
      
      </style>

  </head>

  <body>








    <div class="container">

<!-------------------------------------------------->


<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">-->
<nav class="navbar navbar-expand-lg  navbar-light navcolor  text-white ml-auto">
  <a class="navbar-brand text-white  " > <h3 class="pt-0 mt-0"></h3> <!--<img class="img-fluid" src="pics/woodridge.in.png" alt="" width="100" height="100" >--></a>
  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
     
     <li class="nav-item active ">
        <a class="nav-link text-white" href="{{ url('/home') }}">Home<span class="sr-only">(current)</span></a>
     </li>
      
      <li class="nav-item">
      <!--  <a class="nav-link" href="#">Link</a>-->
      </li>
     
     
 
  <!-------------------------------------------------->   
  <!-------------------------------------------------->      
<!-- <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-white"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown">          Messages      </a> 
 <div class="dropdown-menu   navbar-light  navcolor "   aria-labelledby="navbarDropdown">

                                                       
          
            <a class="nav-link text-white" href="chairman-message.php" >Chairman Message</a>  
         <div class="dropdown-divider"></div>     <a class="nav-link text-white" href="president-message.php">Senior Vice President Messsage</a>    
        <div class="dropdown-divider"></div>     <a class="nav-link text-white" href="general-secretary.php">General Secretary Messsage</a>    
      <div class="dropdown-divider"></div>     <a class="nav-link text-white" href="head-of-school.php">Head of School Messsage</a>   
             
             
          
              </div>
            </li> -->
      <!-------------------------------------------------->    
        <!-------------------------------------------------->      
     <!-------------------------------------------------->   
  <!-------------------------------------------------->      
  <!-- <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-white"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown">         Academics and Athletics      </a> 
 <div class="dropdown-menu   navbar-light  navcolor "   aria-labelledby="navbarDropdown"> -->

                                                       
          

<!-- <div class="dropdown-divider"></div>     <a class="nav-link text-white" href="{{ url('/insert_business') }}">Business Insert</a>   
<div class="dropdown-divider"></div>     <a class="nav-link text-white" href="{{ url('/insert-route') }}">Insert Route</a>     
<div class="dropdown-divider"></div>     <a class="nav-link text-white" href="{{ url('/find_loads') }}">Find Loads</a>     
 -->

<!--              
<a class="nav-link text-white" href="{{ url('/insert_transport') }}" >Transport Insert</a>  
<div class="dropdown-divider"></div>     <a class="nav-link text-white" href="{{ url('/special-route') }}">Special Route</a>      -->

              <!-- </div>
            </li> -->
      <!-------------------------------------------------->    
        <!-------------------------------------------------->     
        <li class="nav-item active">
        <a class="nav-link text-white" href="{{ url('/insert_business') }}">Business Insert <span class="sr-only">(current)</span></a>
      </li> 
     
      @if(!empty( \Auth::user()->businessprofile ))
        <li class="nav-item active">
        <a class="nav-link text-white" href="{{ url('/insert-route') }}">Insert Route <span class="sr-only">(current)</span></a>
      </li> 

      <li class="nav-item active">
        <a class="nav-link text-white" href="{{ url('/routes') }}">Delete Route <span class="sr-only">(current)</span></a>
      </li>
      
      @endif

       

      <!-------------------------------------------------->     

 
      <li class="nav-item active">
        <a class="nav-link text-white" href="{{ url('/logout') }}">Logout <span class="sr-only">(current)</span></a>
      </li> 
     
  <!-------------------------------------------------->    
    </ul>
    
  </div>
</nav>

<!-------------------------------------------------->
</div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap Dropdown Hover JS -->
    <script src="js/bootstrap-dropdownhover.min.js"></script>



  </body>
</html>