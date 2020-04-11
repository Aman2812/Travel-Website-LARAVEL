<!Doctype html>
<html>
<head>
    <title>SignUp page</title>
    <link rel="stylesheet" href="index1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="stylesheet" type="text/css" href="bootstrap.css">
<style type="text/css">
  
       body{
  background: url(https://www.2020lead.com/wp-content/uploads/2015/07/Travel.jpg);
    background-size: cover;
    background-position: center;
background-attachment: fixed;
 background-repeat: no-repeat;
   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;



    font-family: 'Lobster', cursive;
    color: white;
    height: 100%;
    width: 100%;

}

.custom_nav .navbar.navbar-fixed-top .navbar-inner{
    background: rgba(255, 255, 255, 0.8);
}

.footer{

  padding: 5px 0;
   background-color: #101010;
   color:#9d9d9d;
  bottom: 0;
   position: fixed;
  width: 100%; 
  opacity: 0.7;
  color: white;
}



h1
        {
         text-align: center;
         padding: 10px 20px 10px 10px;
         margin: 10px;
         color:white;
        }
body
{
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;

}
form
{
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 30%;
}
.submit-btn
{
    background-color: black;
    color: white;
    padding: 2%;
    font-size: 22px;
    margin-top: 10px;  
    border: 3px solid red;
    cursor: pointer;
}
input
{
    padding: 3%;
}
label
{
    font-size: 20px;
    font-weight: bolder;
    margin: 10px 0;
    color: red;
}
@media (min-width: 300px) and (max-width: 500px)
{
    form
    {
        width: 80%;
    }
    label
    {
        color: green;
    }
}













</style>
    <script type="text/javascript">
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>
</head>
<body>
<div class="alert alert-success" role="alert">
  <p> <a href="mainPage.blade.php"><b>MainPage </b></a>Seems like you're new here?. Thank you for connecting with us. <a href="Login2.blade.php"><b>Click here</b></a> to Login </p>
</div>


    <form>
    <form name="myForm" action="abc.php" onsubmit="return validateForm()" method="post">
    <h1 style="color: black;">Sign up</h1>
  
    <input type="text" name="fname" placeholder="Enter Your First Name" required="">
  <br>
    <input type="text" placeholder="Enter Your Last Name" required="">
    <br>
    <input type="email" placeholder="Enter Your Email"required="">
    <br>
    <input type="password" id="myInput" placeholder="Enter Your Password"required="">
    <input type="checkbox" onclick="myFunction()"><p style="color: white;">Show Password</p>
    
    <input type="number" placeholder="Enter Your Phone Number"required=""><br>
    <button class="submit-btn" onclick="newUser2()">Sign Up</button>
    </form>
  </form>
                <footer class="footer">
    <div class="container">
        <center><p>Copyright © Explorica. All Rights Reserved | Contact Us: +91 90000 00000</p></center>     
    </div>
</footer>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
</body>
</html>