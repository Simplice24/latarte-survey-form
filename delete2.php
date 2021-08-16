<?php
$conn=mysqli_connect('localhost','root','','latarte');
$sql="DELETE FROM survey2 WHERE id=".$_GET['id'];
$r=mysqli_query($conn,$sql);
if($r){
    echo '<script>
    alert("You deleted selected record succesfully");
    window.location="fetch2.php";
    </script>';
}
else{
    echo '<script>
    alert("Failed to delete");
    window.location="fetch2.php";
    </script>';
?>