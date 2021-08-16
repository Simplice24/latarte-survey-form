<?php
$conn=mysqli_connect('localhost','root','','latarte');
$id=$_REQUEST['id'];
$query = "DELETE FROM survey1 WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: fetch1.php"); 
?>