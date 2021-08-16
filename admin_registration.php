<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/hoverimage.css">
  <link rel="stylesheet" href="css/logo.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>

<header>
  <h2><img class="logo" src="logo.jpg">La Tarte Ltd / Cake and Coffee Shop</h2>
<div class="topnav">
</div>
</header>
<form  action="add.php" method="POST">
  <div class="container">
    <h1>Add Admin</h1>
    <hr>

    <label for="firstname"><b>Username</b></label>
    <input type="text" placeholder="Enter Admin username" name="username"  required>

    <label for="psw"><b>Admin Password</b></label>
    <input type="password" placeholder="Enter Admin password" name="password"  required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

    <label for="lastname"><b>Admin role</b></label>
    <input type="text" placeholder="Enter Admin role" name="role"  required>

    <hr>
  
    <button type="submit" name="add_admin" class="registerbtn">add</button>
  </div>
</form>


<center>
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">La Tarte</h4>
            <p><a href="#"><i class="fa fa-street-view" aria-hidden="true"></i></a> <b>SH 301 AVE 14</b><br><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><b> HUYE</b><br><br><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><b> : latarteshop@gmail.com</b><br><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a> : +250782576633</p>
           
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
         
            <p class="copyright clear-float">
              © La Tarte. All Rights Reserved
              <div class="credits">
                
                Designed by Simplice</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </center>

</body>
</html>