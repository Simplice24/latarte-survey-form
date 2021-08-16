<?php
$conn=mysqli_connect('localhost','root','','latarte');
$sql="DELETE FROM administrator WHERE id=".$_GET['id'];
$r=mysqli_query($conn,$sql);
if($r){
    echo '<script>
    alert("You deleted an admin succesfully");
    window.location="fetch3.php";
    </script>';
}
else{
    echo '<script>
    alert("Failed to delete");
    window.location="fetch3.php";
    </script>';
}
?>