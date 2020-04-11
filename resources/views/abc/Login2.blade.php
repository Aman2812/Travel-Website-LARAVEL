<!DOCTYPE html>
<html>
<head>
	
	<title>Login Page</title> 
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize
	/1.0.0/css/materialize.min.css">


     <style type="text/css">

body{
  background: url('https://images.hdqwalls.com/wallpapers/light-abstract-simple-background-iv.jpg');
  background-size: cover;
    background-position: center;
    font-family: lato;
    color: white;
    background-repeat: no-repeat;
    height: 103%;
    width: 100%;

}
#content {

  text-align:center;
    padding-top: 20%;
    text-shadow: 1px 1px 2px pink;

}
html{
  height: 100%;
  width: 100%;
}
h1{
  font-weight: 700;
  font-size: 5em;
  color: grey;
}

h3{
  color: grey;
}
#back{
     opacity: 0.8;

}
label{
  color: chartreuse;
}
body{
  font-family: 'Lobster', cursive;

}
      </style>

</head>
 <body>

<!--header-->


<nav class="navbar navbar-default" >
  <div class="container" style="width: 100%; height: 100;">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   <a href="homepage.blade.php" class="navbar-brand" ><i class="fab fa-superpowers"></i>Explorica</a>
    </div>

 
    <div class="collapse navbar-collapse" id="mynav">
      <ul class="nav navbar-nav " style="margin-top: .5%;">
        <li><a href="homepage.blade.php">Tour</a></li>
        <li><a href="homepage.blade.php">Venues</a></li>
        <li><a href="">Pages</a></li>
        <li><a href="">Blog</a></li>

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



<div class="container img" id="back">
    <div class="row row_style" style="margin-top: 6%;">
        <div class="col-xs-4 col-xs-offset-4 col-md-6 col-md-offset-3">
           <div class="panel panel-info">
            
               <div class="panel-body">
                <p class="text-warning">Login into it</p>
                 <div class="col-xs-12">
				 
				 
                <form name="myForm" action="include.php" 
				 method="post">
                    <div class="form-group">
					
					
					
                        <label for="email">Email</label>
                    <input type="email"  class="form-control " name="email" id="email">
                </div>
                
                       
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password"  class="form-control" name="password" id="password">
                </div>

                <a href="#"><input type="button" name="Submit" value="Login" class="btn btn-primary"></a>
            </form>

              </div>
                   
               </div>
           </div> 
        </div>
    </div>

</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>


    </body>
</html>