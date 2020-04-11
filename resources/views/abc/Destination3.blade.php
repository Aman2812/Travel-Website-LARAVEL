
<!DOCTYPE html>
<html>
<head>
 <title>San Francisco</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--link rel="stylesheet" type="text/css" href="front1.css"-->

 
  <style>
  /* Make the image fully responsive */
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
  </style>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
    $('button').addClass('btn-primary').text('Switch to Orange Tab');
    $('button').click(function(){
      $('#tabs a[href=#booking]').tab('show');
    });
</script> 


    </head>
<body>


<nav class="navbar navbar-default">
  <div class="container" >
  
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   <a href="mainPage.php" class="navbar-brand"><i class="fab fa-superpowers"></i>Explorica</a>
    </div>

 
    <div class="collapse navbar-collapse" id="mynav">
      <ul class="nav navbar-nav ">
        <li class="nav-item"><a class="nav-link active" href="" >Tour</a></li>
        <li><a href="">Venues</a></li>
        <li><a href="">Pages</a></li>
        <li><a href="">Blog</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Sign Up<i class="fas fa-user-plus"></i></a></li>
        <li><a href="#">Login <i class="fas fa-user"></i></a></li>

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
      <li data-target="#myCarousel" class="active"></li>

    </ol>



    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="https://wallpaperaccess.com/full/328218.jpg" alt="Los Angeles" style="width:100%; ">
        <div class="carousel-caption">
          <h3>San Francisco</h3>
          <p>LA is always so much fun!</p>
         
        </div>
      </div>

  
    </div>
</div>
</div>





<!--Card for statements-->
<div class="container">
<div style="margin-left: 3%;">
 <div class=" col-md-6 col-sm-6 col-xs-6 col-xs-12" style=" margin-top: 2%; ">
  <div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">Booking Form</div>
      <div class="panel-body"><i class="fa fa-calendar"></i><input type="text" name="text" placeholder="Enter Date" style="width: 30%;
  padding: 6px 6px; margin: 0px 0px 0px 10px; box-sizing: border-box;"> <i class="fa fa-anchor"></i><input type="text" name="text" style="width: 30%;
  padding: 6px 6px; margin: 0px 0px 0px 10px; box-sizing: border-box;" placeholder="Select the No of Persons"></div>
    </div>
  </div>
</div>
<div class=" col-md-6 col-sm-6 col-xs-6 col-xs-12" style=" margin-top: 2%;">
    <div class="panel panel-success">
      <div class="panel-heading">Enquiry Form</div>
      <div class="panel-body"><i class="fa fa-calendar"></i><input type="text" name="text" placeholder="Enter Your Name" style="width: 30%;
  padding: 6px 6px; margin: 0px 0px 0px 10px; box-sizing: border-box;"> <i class="fa fa-anchor"></i><input type="text" name="text" style="width: 30%;
  padding: 6px 6px; margin: 0px 0px 0px 10px; box-sizing: border-box;" placeholder="Enter Email"></div>
    </div>




</div>
</div>
</div>



<hr style="border-top: 1px solid chartreuse;">


<!--Content -->


<div class="container" style="margin-top: 20px;">
<div class="row">
  <!--first row first flight-->
  <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href="Destination_1_hotel_1.php "><img src="https://wallpaperaccess.com/full/84586.jpg" class="image"></a>
  <div class="caption middle">
                           
                            <div> <span class="fas fa-plane">  Hotel Zoe Fisherman's Wharf</span></div><br>
                            <div><span class="fas fa-star color-red"></span>
                            <span class="fa fa-star color-yellow"></span>
                          <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                      <span class="fa fa-star color-yellow"></span></div><br>
                      <div><span class="fas fa-calendar">&nbsp; &nbsp; Total : 7 Days</span></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Adult : $1800</i></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Children : $1500</i></div>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                            <hr style="border-top: 1px solid red;">
                            <center><button type="submit" class="btn btn-warning" style="background-color: red;" action="Destination_3_hotel_1.php">Book Now</button></center>
                        </div>
  </div>
  </div>



    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href=" "><img src="https://i.pinimg.com/originals/c1/e0/00/c1e000337f54faad027ee28557490fe5.jpg" class="image"></a>
  <div class="caption middle">
                         
                            <div> <span class="fas fa-plane">  Hilton San Francisco Union Square</span></div><br>
                            <div><span class="fas fa-star color-red"></span>
                            <span class="fa fa-star color-yellow"></span>
                          <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                      <span class="fa fa-star color-yellow"></span></div><br>
                      <div><span class="fas fa-calendar">&nbsp; &nbsp; Total : 8 Days</span></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Adult : $1900</i></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Children : $1300</i></div>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                            <hr style="border-top: 1px solid red;">
                            <center><button type="button" class="btn btn-warning" style="background-color: red;">Book Now</button></center>
                        </div>
  </div>
  </div>



  <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href=" "><img src="https://windows10spotlight.com/wp-content/uploads/2017/10/3e4243302828cd183bdda01ffc5f418c.jpg" class="image"></a>
  <div class="caption middle">
                           
                            <div> <span class="fas fa-plane">   San Francisco Marriott Marquis</span></div><br>
                            <div><span class="fas fa-star color-red"></span>
                            <span class="fa fa-star color-yellow"></span>
                          <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                      <span class="fa fa-star color-yellow"></span></div><br>
                      <div><span class="fas fa-calendar">&nbsp; &nbsp; Total : 4 Days</span></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Adult : $1200</i></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Children : $1000</i></div>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                            <hr style="border-top: 1px solid red;">
                            <center><button type="button" class="btn btn-warning" style="background-color: red;">Book Now</button></center>
                        </div>
  </div>
  </div>

  <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <a href=" "><img src="https://wallpaperfx.com/view_image/luxurious-hotel-room-1920x1080-wallpaper-11239.jpg" class="image"></a>
  <div class="caption middle">
                          
                            <div> <span class="fas fa-plane">  Hotel Union Square</span></div><br>
                            <div><span class="fas fa-star color-red"></span>
                            <span class="fa fa-star color-yellow"></span>
                          <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                      <span class="fa fa-star color-yellow"></span></div><br>
                      <div><span class="fas fa-calendar">&nbsp; &nbsp; Total : 7 Days</span></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Adult : $1900</i></div><br>
                      <div><i class="fa fa-tags"> &nbsp; Children : $1200</i></div>
                            <hr style="border-top: 1px solid red;">
                            <p style="word-spacing: 10px;">20 Hotels   .24 cars   .20+ Tours </p>
                            <hr style="border-top: 1px solid red;">
                            <center><button type="button" class="btn btn-warning" style="background-color: red;">Book Now</button></center>
                        </div>
  </div>
  </div>

<hr style="border-top: 1px solid red;">


  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

