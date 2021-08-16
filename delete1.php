<?php
$conn=mysqli_connect('localhost','root','','latarte');
$id=$_GET['id'];
$sql="DELETE FROM survey1 WHERE id=".$id;
$dx=mysqli_query($conn,$sql);
if($dx){
	echo '<script>
    alert("You deleted selected record succesfully");
    window.location="fetch1.php";
    </script>';
}
else{
	echo '<script>
    alert("Failed to delete");
    window.location="fetch1.php";
    </script>';
}
?>