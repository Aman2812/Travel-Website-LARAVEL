
<!DOCTYPE html>
<html>
<head>
 <title>Your Destination, Our services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="stylesheet" type="text/css" href="bootstrap.css">


        <!--link rel="stylesheet" type="text/css" href="front1.css"-->

 
   <style type="text/css">
  .carousel-inner img {
    width: auto;
    height: 20%;
    background-repeat: no-repeat;
  background-attachment: scroll;
  }
  .carousel .item {
  height: 600px;
  width: 100%;
}

.item img {
    position: absolute;
    top: 0;
    left: 0;
    min-height: 300px;
}

.container:hover .image {
  opacity: 0.8;
}

.container:hover .middle {
  opacity: 1;
}

body{
  font-family: 'Lobster', cursive;

}

.custom_nav .navbar.navbar-fixed-top .navbar-inner{
    background: rgba(255, 255, 255, 0.8);
}

.footer{

  padding: 5px 0;
   background-color: #101010;
   color:#9d9d9d;
  bottom: 0;
    
  width: 100%; 
  opacity: 0.7;
  color: white;
}
</style>

    </head>
<body>


<nav class="navbar navbar-default">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   <a href="homepage.blade.php" class="navbar-brand"><i class="fab fa-superpowers"></i>Explorica</a>
    </div>

 
    <div class="collapse navbar-collapse" id="mynav">
      <ul class="nav navbar-nav ">
        <li><a href="mainPage.blade.php">Tour</a></li>
        <li><a href="mainPage.blade.php">Venues</a></li>
        
        <li><a href="Aboutus.blade.php">About Us</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.blade.php">Sign Up<i class="fas fa-user-plus"></i></a></li>
        <li><a href="Login2.blade.php">Login <i class="fas fa-user"></i></a></li>

         </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Carasoul -->

<div style="margin-top: -20px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>



    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="https://cdn.pixabay.com/photo/2016/01/06/00/15/city-1123363_960_720.jpg" alt="Los Angeles" style="width:100%; ">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="https://wallpaperplay.com/walls/full/9/7/1/195324.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://i.pinimg.com/originals/f5/b5/7c/f5b57cda329dd2e49374a3531133496a.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>

  
    </div>



    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<!--Card for statements-->

<div class="jumbotron jumbotron-fluid" style="background-color: #A233D6; color: white;  opacity: 0.7;">
  <div class="container">
    <!--h1 class="display-4">Fluid jumbotron</h1-->
    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
       <img src="https://demo.goodlayers.com/traveltour/wp-content/uploads/2016/06/icon-1.png" width="40px;" width="40px;"  style="float: left; margin-right: 20px;">
      <p class="lead" style="font-size: 20px;  margin-left: 10px;"  >500+ Destinations <br> Costa Rica</p>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
      <img src="https://demo.goodlayers.com/traveltour/wp-content/uploads/2016/06/icon-2.png" width="40px;" width="40px;"  style="float: left; margin-right: 20px;">
      <p class="lead" style="font-size: 20px;  margin-left: 10px;"  >Best Price Qurantee <br>TajMahal</p>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
      <img src="https://demo.goodlayers.com/traveltour/wp-content/uploads/2016/06/icon-3.png" width="40px;" width="40px;"  style="float: left; margin-right: 20px;">
      <p class="lead" style="font-size: 20px;  margin-left: 10px;"  >Great Customer <br>Dubai</p>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
      <img src="https://demo.goodlayers.com/traveltour/wp-content/uploads/2016/06/icon-4.png" width="40px;" width="40px;"  style="float: left; margin-right: 20px;">
      <p class="lead" style="font-size: 20px;  margin-left: 10px;"  >Super Fast Booking<br>Switzerland</p>
    </div>

    
  </div>
</div>



<!--Content -->

<div class="container" style="margin-top: 20px;">
<div class="row">
  <!--first row-->
  <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination1.blade.php "><img src="https://holidify.com/images/bgImages/NEW-ZEALAND.jpg" class="image"></a>
  <div class="caption middle">
                            <h3>New Zealand</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                        </div>
  </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination2.blade.php "><img src="https://www.holidify.com/images/bgImages/LONDON.jpg"></a>
  <div class="caption">
                            <h3>London</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">25 Hotels   .29 cars   .23+ Tours </p>
                        </div>
  </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination3.blade.php "><img src="https://www.holidify.com/images/bgImages/GREAT-BARRIER-REEF.jpg"></a>
  <div class="caption">
                           <h3>Great Barrier Leaf</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">30 Hotels   .24 cars   .40+ Tours </p>
                        </div>
  </div>
  </div>
</div>
<!--second row-->
  <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination4.blade.php "><img src="https://www.holidify.com/images/cmsuploads/compressed/grand_20181214130027.jpg"></a>
  <div class="caption">
                           <h3>The Grand Canyon</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">27 Hotels   .25 cars   .27+ Tours </p>
                        </div>
  </div>
  </div>

   <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination5.blade.php "><img src="https://www.holidify.com/images/bgImages/BARCELONA.jpg"></a>
  <div class="caption">
                           <h3>Bracelona, Spain</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">10 Hotels   .24 cars   .20+ Tours </p>
                        </div>
  </div>
  </div>


  <div class="col-md-4 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination6.blade.php "><img src="https://www.holidify.com/images/cmsuploads/compressed/shutterstock_470492840_20191029143057.png"></a>
  <div class="caption">
                           <h3>British Virgin Islands</h3>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                        </div>
  </div>
  </div>
<!--third row-->




  
</div>
</div>

              <footer class="footer">
    <div class="container">
        <center><p>Copyright © Explorica. All Rights Reserved | Contact Us: +91 90000 00000</p></center>     
    </div>
</footer>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
</body>
</html>

