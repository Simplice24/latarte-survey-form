<?php
$conn=mysqli_connect('localhost','root','','latarte');
$id=$_REQUEST['id'];
$query = "DELETE FROM survey2 WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: fetch.php"); 
?>