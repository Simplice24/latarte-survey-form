<?php
session_start();
if(!isset($_SESSION['username']))
{
   header("Location:web.html");
   exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  
<head>
    <link rel="stylesheet" href="css/hoverimage.css">
    <link rel="stylesheet" href="css/formstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/logo.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <title>
        Employee's Survey Form
    </title>
</head>
  
<body>

<header>
    <h2><img class="logo" src="logo.jpg">La Tarte Ltd / Cake and Coffee Shop</h2>
<div class="topnav">
  <a class="active" href="web.html" style="float: left;">Home</a>
  <a href="about.html">About Us</a>
  <a href="logout.php" style="float:right">Log Out</a>
</div>
</header>
<article>
    <h1 style="text-align:center; font-family:cooper black">Employee's Satisfaction Survey</h1>
    <form action="insert1.php" method="POST">
        
        <div class="form-control">
            <label for="" id="">
             How would you describe your overall level of job satisfaction?<br>
            </label>
            
            <label for="recommed-1">
                <input type="radio" id="recommed-1" name="recommed1" value="Very satisfied">Very satisfied</input>
            </label>
            <label for="recommed-2">
            <input type="radio" id="recommed-2" name="recommed1" value="Satisfied">Satisfied</input>
            </label>
            <label for="recommed-3">
                <input type="radio" id="recommed-3" name="recommed1" value="unsatisfied">unsatisfied</input>
            </label>
			<label for="recommed-3">
                <input type="radio" id="recommed-3" name="recommed1" value="neutral">neutral</input>
            </label>
        </div>
		
		<div class="form-control">
            <label for="" id="">
             Do you feel valued at work?<br>
            </label>
            <label for="recommed-1">
                <input type="radio" id="recommed-1" name="recommed2" value="Yes">Yes</input>
            </label>
            <label for="recommed-2">
            <input type="radio" id="recommed-2" name="recommed2" value="No">No</input>
            </label>
			
			</div>
			
			<div class="form-control">
            <label for="" id="">
             Does your job cause you stress or anxiety?<br>
            </label>
            <label for="recommed-1">
                <input type="radio" id="recommed-1" name="recommed3" value="Yes">Yes</input>
            </label>
            <label for="recommed-2">
            <input type="radio" id="recommed-2" name="recommed3" value="No">No</input>
            </label>
			
			</div>
			
			<div class="form-control">
            <label for="" id="">
             Do you have the resources you need to perform your job well?<br>
            </label>
            <label for="recommed-1">
                <input type="radio" id="recommed-1" name="recommed4" value="Yes">Yes</input>
            </label>
            <label for="recommed-2">
            <input type="radio" id="recommed-2" name="recommed4" value="No">No</input>
            </label>
			
			</div>
			
			<div class="form-control">
            <label for="" id="">
             Are sufficient efforts being made to solicit colleague opinions and feedback?<br>
            </label>
            <label for="recommed-1">
                <input type="radio" id="recommed-1" name="recommed5" value="Yes">Yes</input>
            </label>
            <label for="recommed-2">
            <input type="radio" id="recommed-2" name="recommed5" value="No">No</input>
            </label>
			
			</div>
  
       
  
        <div class="form-control">
            <label for="comment">
                Any comments or suggestions
            </label>
 
            <!-- multi-line text input control -->
            <textarea name="comment" id="comment"
                placeholder="Enter your comment here">
            </textarea>
        </div>
  
        <!-- Multi-line Text Input Control -->
        <button type="submit" value="submit" class="registerbtn">
            Submit
        </button>
    </form>
	</article>

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