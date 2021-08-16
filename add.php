<?php 
  $db = mysqli_connect('localhost', 'root', '', 'latarte');
  $username = "";
  $password = "";
  $role="";
if (isset($_POST['add_admin'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
    $role = $_POST['role'];
	$sql_u = "SELECT * FROM administrator WHERE admin_username='$username'";
	$sql_e = "SELECT * FROM administrator WHERE admin_password='$password'";
	$res_u = mysqli_query($db, $sql_u);
	$res_e = mysqli_query($db, $sql_e);

	if (mysqli_num_rows($res_u) >0) {
        echo'<script>
        alert("Username exist in database");
        window.location="fetch3.php";
        </script>';
	}elseif(mysqli_num_rows($res_e) >0){
        echo'<script>
        alert("password already exist in database");
        window.location="fetch3.php";
        </script>';	
	}else{
           $query = "INSERT INTO administrator (admin_username,admin_password,role) 
		VALUES ('$username', '$password','$role')";
           $results = mysqli_query($db, $query);
echo'<script>
window.location="fetch3.php";
</script>';
exit();
    }
}
?>
