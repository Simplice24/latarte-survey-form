<?php
$conn=mysqli_connect('localhost','root','','latarte');
$id=$_GET['id'];
$sql = "DELETE FROM registration WHERE id=".$id;
$r = mysqli_query($conn,$sql);
if($r){
    echo '<script>
    alert("You deleted selected record succesfully");
    window.location="fetch.php";
    </script>';
}
else{
    echo '<script>
    alert("Delete failed");
    window.location="fetch.php";
    </script>';
}
mysqli_close($conn);
?>