<?php
$conn=mysqli_connect('localhost','root','','latarte');
$r="Select * from registration where id=".$_GET['id'];
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
  <a class="active" href="web.html" style="float: left;">Home</a>
  <a href="logout.html" style="float:right">Log Out</a>
  <a href="about.html">About Us</a>
</div>
</header>
<form action="" method="post">
  <div class="container">
    <h1>Update</h1>
    <p>Please fill in this form to update selected record.</p>
    <hr>

    <label for="firstname"><b>First Name</b></label>
    <input type="text" placeholder="Enter your First Name" name="fname" value="<?php echo $d['fname'];?>" required>

    <label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter your Last Name" name="lname" value="<?php echo $d['lname'];?>" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" value="<?php echo $d['email'];?>" required >

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="create Username" name="username" value="<?php echo $d['username'];?>" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Create Password" name="psw" value="<?php echo $d['password'];?>" required>

    <hr>
  
    <button type="submit" name="update" class="registerbtn">Update</button>
  </div>
</form>

<?php
if(isset($_POST['update'])){
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['psw'];
    $w="update registration set fname='$firstname',lname='$lastname',email='$email',username='$username',password='$password' WHERE id=".$_GET['id'];
    $r=mysqli_query($conn,$w);
    if(!$r){
        echo "Update failled";
    }else{
        echo '<script>
        window.location="fetch.php";
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