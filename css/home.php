<?php
include("connection.php");
session_start();
if(!isset($_SESSION["USER"])){
  header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>homework</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

      <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link https://stackpath.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css>

    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->


  </head>
  <body style="background-image:url(img/bg.jpg)">
<div class="container">
  <nav class="navbar navbar-default navbar-top" style="background-color:CadetBlue; margin-top:20px; margin-bottom:8px;">
      <a class="navbar-brand" href="#"><img src="img/eee.png" style="width:140%; height:160px; margin-top:-70px; margin-left:auto;"/></a>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="Home.html">Home</a></li>
            <li><a href="Contact.html">Contact</a></li>
            <li><a href="learn.html">learn</a></li>
            <li><a href="design.html">design</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> learn <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <li class="dropdown-header">Example</li>
                  <li><a href="#">City</a></li>
                  <li><a href="#">Address</a></li>
                  </ul>
                </li>
              </ul>
             </div>
  </nav>
</div>

      <div class="row">
          <div class="container">
            <div class="col-md-12" style="background-color:#086a8a; min-height:20px; margin-bottom:10px; padding:15px; border-radius:15px;">
             <center><b>KAUTHART CITY CAKES</b >
            </div>
          </div>
      </div>


  <div class="container">
    <div class="jumbotron text-center" style="background-color:; margin-top:8px; margin-bottom:8px;" data-interval="1000">
      <div class="row">
      <div class="col-md-5">

        <form action="/action_page.php">
   <div class="form-group">
     <label>Username:</label>
     <input type="name" class="form-control" placeholder="Enter your username" id="email">
   </div>
   <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="password" class="form-control" placeholder="Enter your password" id="pwd">
   </div>
   <div class="form-group form-check">
     <label class="form-check-label">
       <input class="form-check-input" type="checkbox">Remember me</label>
   </div>
   <button type="submit" class="btn btn-success" style="border-radius:15px;"><span class="fa fa-check-square"> Submit </span></button>
 </form>
      </div>


<div class="col-md-7">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/c3.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img/c5.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="img/c7.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img/c10.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="img/c11.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="img/c11.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="img/c15.jpg" alt="Flower">
    </div>

    <div class="item">
        <img src="img/c24.jpg" alt="Flower">
    </div>


        <div class="item">
          <img src="img/c30.jpg" alt="Flower">
        </div>


            <div class="item">
              <img src="img/c11.jpg" alt="Flower">
            </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

  </div>
  </div>
  </div>
    </div
<!--<img src="img/d.jpeg" width="250" height="200"/> -->
    <div class="container">
    <div class="navbar navbar-default navbar-bottom" style="background-color:CadetBlue; margin-bottom:5px; padding:1%;">
      <div class="navbar-tex pull-center"><center><b><i>copyrightbykauthart96</i></b></center>
        <a href="#"><i class="fa fa-facebook fa-2x"></i>

        </a></div>
    </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>
