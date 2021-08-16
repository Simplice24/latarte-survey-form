<?php
session_start(); 

$conn=mysqli_connect('localhost','root','','latarte');
$result=mysqli_query($conn,"select * from survey1");

if(!isset($_SESSION["username"]))
{
   header("Location:web.html");
   exit();
}
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
        <li><a href="fetch.php" >Users</a></li>
        <li><a href="fetch1.php" class="active">employees's survey</a></li>
        <li><a href="fetch2.php">clients's survey</a></li>
        <li><a href="fetch3.php">administrators</a></li>
      </ul>
    </nav>
  <article>  
<table style="width:100%; border=1">
  <tr>
    <th>ID</th>
    <th>username</th>
    <th>Question 1</th> 
    <th>Question 2</th>
    <th>Question 3</th> 
    <th>Question 4</th>
    <th>Question 5</th>
     <th>Date</th>
    <th>comment</th>
    <th>Delete</th>
  </tr>
  <?php while($row=mysqli_fetch_array($result)):?>
  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['Qst1'];?></td>
    <td><?php echo $row['Qst2'];?></td>
    <td><?php echo $row['Qst3'];?></td>
    <td><?php echo $row['Qst4'];?></td>
    <td><?php echo $row['Qst5'];?></td>
    <td><?php echo $row['comment'];?></td>
    <td><?php echo $row['date']?></td>
    <td><a href="delete1.php?id=<?php echo $row['id'];?>">Delete</a></td>
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
