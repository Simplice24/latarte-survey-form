<?php
session_start();

$conn=mysqli_connect('localhost','root','','latarte');
$result=mysqli_query($conn,"select * from registration");

if(!isset($_SESSION["username"]))
{
   header("Location:web.html");
   exit();
}
$now = new DateTime();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/hoverimage.css">
<link rel="stylesheet" href="css/logo.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/panel.css">

<style>
    table {
    border-collapse: collapse;
    width: 100%;
  }
  
  th, td {
    text-align: left;
    padding: 8px;
    border-radius: 25px;
  }
  tr:nth-child(even) {background-color:white;}
</style>

</head>
<body>


<header>
    <h2><img class="logo" src="logo.jpg">La Tarte Ltd / Cake and Coffee Shop</h2>
   
<div class="topnav">

  <a href="logout.php" >Logout</a>
 
  <a class="active" href="web.html" style="float: left;" >Home</a>
</div>
</header>
<section>
    <nav>
      <ul>
        <li><a href="fetch.php" class="active">Users</a></li>
        <li><a href="fetch1.php">employees's survey</a></li>
        <li><a href="fetch2.php">clients's survey</a></li>
        <li><a href="fetch3.php" >administrators</a></li>
      </ul>
    </nav>
  <article>  
<table style="width:100%; border:1">
  <tr>
    <th>ID</th>
    <th>First name</th>
    <th>Last name</th> 
    <th>Email</th>
    <th>User Name</th> 
    <th>Password</th>
    <th>Date</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
  <?php while($row=mysqli_fetch_array($result)):?>
  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['lname'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['password'];?></td>
    <td><?php echo $row['date']?></td>
    <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
    <td><a href="updateuser.php?id=<?php echo $row['id'];?>">Update</a></td>
  </tr>
  <?php endwhile;?>
</table>
  </article>
  </section>
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
              &copy La Tarte. All Rights Reserved
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
