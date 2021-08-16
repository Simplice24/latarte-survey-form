<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "latarte");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 else{
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['fname']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['lname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$username= mysqli_real_escape_string($link, $_REQUEST['username']);
$password_1 = mysqli_real_escape_string($link, $_REQUEST['psw']);
$password_2 = mysqli_real_escape_string($link, $_REQUEST['psw-repeat']);

if ($password_1 != $password_2) {
	echo "The two passwords do not match";
  }
  
 else{
// Attempt insert query execution
$sql = "INSERT INTO registration (fname, lname, email,username,password) VALUES ('$first_name', '$last_name', '$email' ,'$username', '$password_1 ')";
if(mysqli_query($link, $sql)){
    echo '<script>
    window.location="web.html";
    </script>';

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    
}
}
}
// Close connection
mysqli_close($link);
?>