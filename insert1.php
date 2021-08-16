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
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$Question1 = mysqli_real_escape_string($link, $_REQUEST['recommed1']);
$Question2= mysqli_real_escape_string($link, $_REQUEST['recommed2']);
$Question3 = mysqli_real_escape_string($link, $_REQUEST['recommed3']);
$Question4= mysqli_real_escape_string($link, $_REQUEST['recommed4']);
$Question5 = mysqli_real_escape_string($link, $_REQUEST['recommed5']);
$comment = mysqli_real_escape_string($link, $_REQUEST['comment']);


// Attempt insert query execution
$sql = "INSERT INTO survey1 (Qst1, Qst2, Qst3,Qst4,Qst5,comment) VALUES ('$Question1', '$Question2', '$Question3' ,'$Question4', '$Question5','$comment')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    
}
}
// Close connection
mysqli_close($link);
?>