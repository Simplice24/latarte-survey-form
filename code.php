<?php
$conn=mysqli_connect('localhost','root','','latarte');
$id=$_REQUEST['id'];
$query = "DELETE FROM registration WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location:fetch.php"); 
?>