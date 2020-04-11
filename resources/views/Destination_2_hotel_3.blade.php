
<!DOCTYPE html>
<html>
<head>
 <title>London</title>
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


  <script type="text/javascript"> 

function addNumbers()
                {
                        var val1 = parseInt(document.getElementById("value1").value);
                        var val2 = parseInt(document.getElementById("value2").value);
                        var ansD = document.getElementById("answer");
                        ansD.value = val1*300 + val2*700;
                }
  </script>

 


 <style type="text/css">
    .carousel-inner img {
    width: 98%;
    height: 100%;
    background-repeat: no-repeat;
  background-attachment: scroll;
  }
  .carousel .item {
  height: 400px;
  width: 98%;
}

.item img {
    position: absolute;
    top: 5%;
    left: 0;
    min-height: 800px;
}

.container:hover .image {
  opacity: 0.8;
}

.container:hover .middle {
  opacity: 1;
}

body{
  font-family: 'Lobster', cursive;
  width: 100%;

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
.custom_nav .navbar.navbar-fixed-top .navbar-inner{
    background: rgba(255, 255, 255, 0.8);
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



<center>
<div class="row justify-content-center" style="margin-left:13%; ">
  <div class="col-md-10 col-sm-10 col-xs-10">
  <div class="panel-group" >
    <div class="panel panel-success">
      <div class="panel-heading">About the Hotel Services:<b>Hotel Union Square</b></div>
      <div class="panel-body">FabHotel Kashish Residency is located on the main road in Sector 26.Noida Sector 18 Metro Station is 1.4 km from the hotel, while Indira Gandhi International Airport is an hour drive.</div>
    </div>
</div>
</div>
</div>
<center>
</div>
<!-- Carasoul -->
<div class="container ">
<div class="col-md-6 col-sm-6 col-xs-6 col-xs-12" style="margin-top: -20px; ">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>

    </ol>



    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="https://i.pinimg.com/originals/c1/e0/00/c1e000337f54faad027ee28557490fe5.jpg" alt="Los Angeles" style="width:100%; height: 150%">
        <div class="carousel-caption">
          <h3>London</h3>
          <p>LA is always so much fun!</p>
         
        </div>
      </div>

      <div class="item">
        <img src="https://wallpaperplay.com/walls/full/9/7/1/195324.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>London</h3>
          <p>Thank you, New Zealand!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://i.pinimg.com/originals/f5/b5/7c/f5b57cda329dd2e49374a3531133496a.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>London/h3>
          <p>We love the Big Apple!</p>
        </div>

      </div>

</div>

  </div>
    </div>


    
     <div class=" col-md-6 col-sm-6 col-xs-6 col-xs-12" style=" position: sticky;position: -webkit-sticky;">
  <div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">Check Out</div>
      <div class="panel-body">
<form>
  <div class="form-row">
    <div class="form-group col-md-7">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-5">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>UP</option>
        <option>Punjab</option>
        <option>Rajasthan</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Adult</label>
      <input class="input form-control" type="number" value='0' min="0" name="value1" id="value1">Children*$700 
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Children</label>
<input class="input form-control" type="number"value='0' min="0" name="value2" id="value2"/>Adult*$300
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Final Amount</label>
      <input class="input form-control"type="text" id="answer" name="answer" value=""/>
    </div>
  </div>

<input class="btn btn-danger" type="button" name="Sumbit" value="Calculate" onclick="javascript:addNumbers()"/>
  <a class="btn btn-primary" href="cart.blade.php" role="button">Book Now</a>
</form>


      </div>
     
    </div>
  </div>



</div>









<!--Content -->


<div class="container" style="margin-top: 20px;">
<div class="row">
  <!--first row first flight-->
  <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <div class="caption middle">
                           
                            <div> <img src="https://img.icons8.com/color/50/000000/garage-closed.png"/> <b>&nbsp;&nbsp; Hotel Facilities </b></div><br>
                             <hr style="border-top: 1px solid red;">
                            
                      <div><img src="https://img.icons8.com/offices/40/000000/valet-parking.png"/><b>&nbsp;&nbsp; Parking </b></span></div><br>

                      <div><img src="https://img.icons8.com/offices/40/000000/mini-bar.png"/>&nbsp;<b> MiniBar</b></div><br>

                      <div><img src="https://img.icons8.com/offices/40/000000/escalator.png"/> &nbsp; <b>Escalater </b></div><br>
                      
                      <div><img src="https://img.icons8.com/cute-clipart/40/000000/security-configuration.png"/>&nbsp; <b>24*7 Security </b></div>
                           
                           
                            <hr style="border-top: 1px solid red;">
                           
                        </div>
  </div>
  </div>



    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <div class="caption middle">
                         
                            <div><img src="https://img.icons8.com/color/48/000000/reviewer-male.png"/><b> User Review 1</b></div>
                           <img src="https://img.icons8.com/color/48/000000/christmas-star.png"/>
                           <img src="https://img.icons8.com/color/48/000000/christmas-star.png"/>
                           <img src="https://img.icons8.com/color/48/000000/christmas-star.png"/>
                           <img src="https://img.icons8.com/color/48/000000/christmas-star.png"/>

                           <br>
                      
                     
                            <hr style="border-top: 1px solid red;">
                            <div>
                              "Etiam ultrices sollicitudin at metus porttitor" Rhoncus luctus imperdiet montes eu elit donec ullamcorper magnis nibh sociis sagittis vulputate eget nisl nullam tempor imperdiet hendrerit inceptos primis ridiculus litora Nec parturient non proin conubia eleifend nostra mi mauris nec accumsan placerat pretium est mattis mus dolor inceptos gravida vivamus ut nascetur
                            </div>
                            
                        </div>
  </div>
  </div>



      <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <div class="caption middle">
                         
                            <div><img src="https://img.icons8.com/color/48/000000/reviewer-male.png"/><b> User Review 1</b></div>
                           <img src="https://img.icons8.com/color/48/000000/christmas-star.png"/>
                           <img src="https://img.icons8.com/color/48/000000/christmas-star.png"/>
                           <img src="https://img.icons8.com/color/48/000000/christmas-star.png"/>
                           

                           <br>
                      
                     
                            <hr style="border-top: 1px solid red;">
                            <div>
                              "Etiam ultrices sollicitudin at metus porttitor" Rhoncus luctus imperdiet montes eu elit donec ullamcorper magnis nibh sociis sagittis vulputate eget nisl nullam tempor imperdiet hendrerit inceptos primis ridiculus litora Nec parturient non proin conubia eleifend nostra mi mauris nec accumsan placerat pretium est mattis mus dolor inceptos gravida vivamus ut nascetur
                            </div>
                            
                        </div>
  </div>
  </div>


      <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
    <div class="thumbnail">
  <div class="caption middle">
                         
                            <div><img src="https://img.icons8.com/color/48/000000/reviewer-male.png"/><b> User Review 1</b></div>
                           <img src="https://img.icons8.com/color/48/000000/christmas-star.png"/>
                           <img src="https://img.icons8.com/color/48/000000/christmas-star.png"/>
                           <img src="https://img.icons8.com/color/48/000000/christmas-star.png"/>
                           <img src="https://img.icons8.com/color/48/000000/christmas-star.png"/>

                           <br>
                      
                     
                            <hr style="border-top: 1px solid red;">
                            <div>
                              "Etiam ultrices sollicitudin at metus porttitor" Rhoncus luctus imperdiet montes eu elit donec ullamcorper magnis nibh sociis sagittis vulputate eget nisl nullam tempor imperdiet hendrerit inceptos primis ridiculus litora Nec parturient non proin conubia eleifend nostra mi mauris nec accumsan placerat pretium est mattis mus dolor inceptos gravida vivamus ut nascetur
                            </div>
                            
                        </div>
  </div>
  </div>
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

