<?php
$conn=mysqli_connect('localhost','root','','latarte');
$r="Select * from administrator where id=".$_GET['id'];
$dx=mysqli_query($conn,$r);
if(!$dx){
    echo "Failed to Update";
}
if($d=mysqli_fetch_array($dx)){
?>
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
  <a href="logout.html" style="float:right">Log Out</a>
</div>
</header>
<form action="" method="post">
  <div class="container">
    <h1>Update Admin</h1>
    <p>Please fill in this form collectly to update selected Admin.</p>
    <hr>
    <label for="firstname"><b>Username</b></label>
    <input type="text" placeholder="Enter Admin username" name="username" value=<?php echo $d['admin_username'] ;?> required>

    <label for="psw"><b>Admin Password</b></label>
    <input type="password" placeholder="Enter Admin password" name="password" value=<?php echo $d['admin_password'] ;?> required>

    <label for="lastname"><b>Admin role</b></label>
    <input type="text" placeholder="Enter Admin role" name="role" value=<?php echo $d['role'] ;?>    required>
    <hr>
  
    <button type="submit" name="update" class="registerbtn">Update</button>
  </div>
</form>

<?php
if(isset($_POST['update'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];;
    $w="update administrator set admin_username='$username',admin_password='$password',role='$role' WHERE id=".$_GET['id'];
    $r=mysqli_query($conn,$w);
    if(!$r){
        echo "Update failled";
    }else{
        echo '<script>
        window.location="fetch3.php";
        </script>';
    }
 }
}
?>
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