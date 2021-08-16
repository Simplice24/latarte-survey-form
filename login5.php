<?php
session_start();

$username=$_POST['username'];
$password=$_POST['psw'];
$conn= new MySQLi('localhost','root','','latarte');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

else{
	$stmt=$conn->prepare("select * from registration where username=? AND password=? ");
	$stmt->bind_param("ss",$username,$password);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data=$stmt_result->fetch_assoc();
	    $_SESSION["username"] = "hello";
        $_SESSION["password"] = $data['password'];
		echo '<script>
		window.location="survey1.php";
		</script>';

}
	else{
		echo '<script>
         alert("Wrong username or Password");
		</script>';
		echo '<script>
		window.location="registration_link.html";
		</script>';
	}

}

?>
	