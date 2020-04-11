<!DOCTYPE html>
<html>
<head>
  <title>Cart</title>
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize
	/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/
	materialize/1.0.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	

       <style> 
    body{
    	font-family: 'Lobster', cursive;
    }

    .footer{

  padding: 5px 0;
   background-color: #101010;
   color:#9d9d9d;
  bottom: 0;
    position: fixed;
margin-top: 7%;
  width: 100%; 
  opacity: 0.7;
  color: white;
}
</style>	

</head>
<body>

<div class="container " id="back">
    <div class="row row_style">
        <div class="col-xs-4 col-xs-offset-4 col-md-6 col-md-offset-3">
           <div class="panel panel-info">
            
               <div class="panel-body">
                <h4 class="text-warning">Your Order! Please Proceed Further.....</h4>
                 <div class="col-xs-8">
				 
				 
                <form name="myForm" action="Success.blade.php" 
				   <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="GET"
				 >
				 
                    <div class="form-group">
                        <label for="email">Email</label>
                    <input type="email"  class="form-control " name="email" id="email">
                </div>
                       
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password"  class="form-control" name="password" id="password">
                </div>
                                <div class="form-group">
                    <label for="Password">Confirm Password</label>
                    <input type="password"  class="form-control" name="password" id="password">
                </div>

                                <div class="form-group">
                    <label for="Password">Your SubTotal for ($)......</label>
                                        <label for="Password">Adults[Place Value here]</label>
                                          <label for="Password">Children[Place Value here]</label>
                    <input type="password"  class="form-control" name="password" id="password">
                </div>
				
				<!--div class="form-group">
				
				<h5> Gender : </h5>
				<label class="container">Female
				<input type="checkbox" name="gender" value="female" id="gender">
				<span class="checkmark"></span>
				</label>
				
				
				<label class="container">Two
				<input type="checkbox" name="gender" value="male" id="gender">
				<span class="checkmark"></span>
				</label>



                </div-->
				
				<br>
<br>
				
				
				
				
                 <a class="btn btn-primary" href="mainPage.blade.php" role="button">Go Back</a>
				<button type="Submit" name="Submit" value="SignUp" class="btn btn-primary" style="font-family:'Lobster', cursive; float: right;">CheckOut</button>
				
            </form>

    </div>
    </div>         
     </div><br> <br><br>
 </div>
</div>
</div>


			  <footer class="footer">
    <div class="container">
        <center><p>Copyright © Explorica. All Rights Reserved | Contact Us: +91 90000 00000</p></center>     
    </div>
</footer>
			  
			  </body>
			  
			  </html>
                   