<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@yield('content')

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
        <li><a href="">Tour</a></li>
        <li><a href="">Venues</a></li>
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


</body>
</html>


