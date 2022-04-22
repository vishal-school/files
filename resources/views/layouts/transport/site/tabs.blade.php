<!DOCTYPE html>  
<html lang="en">  
<head>  
  <title>Bootstrap Case</title>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    
</head>  
<body>  
  
<div class="container">  
  <h2>Dynamic Tabs</h2>  
  <ul class="nav nav-tabs">  
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>  
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>  
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>  
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>  
  </ul>  
  
  <div class="tab-content">  
    <div id="home" class="tab-pane fade in active">  
      <h3>HOME</h3>  
      <p>A markup language is a programming language that is used make text more   
           interactive and dynamic. It can turn a text into images, tables, links etc.</p>  
    </div>  
    <div id="menu1" class="tab-pane fade">  
      <h3>Menu 1</h3>  
      <p>Java is a high level, robust, secured and object-oriented programming language.</p>  
    </div>  
    <div id="menu2" class="tab-pane fade">  
      <h3>Menu 2</h3>  
      <p>SQL is just a query language, it is not a database. To perform SQL queries,   
     you need to install any database for example Oracle, MySQL, MongoDB, PostGre SQL, SQL Server, DB2 etc.</p>  
    </div>  
    <div id="menu3" class="tab-pane fade">  
      <h3>Menu 3</h3>  
      <p>The C Language is developed for creating system applications that direct   
      interacts to the hardware devices such as drivers, kernals etc.</p>  
    </div>  
  </div>  
</div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</body>  
</html>  