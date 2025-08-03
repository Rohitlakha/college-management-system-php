<?php

 $fname = $_POST['username'];
 $lname = $_POST['pasword'];
 

$conn = mysqli_connect("localhost","root","","university") or die("Connection Failed");

$sql = "INSERT INTO logintable(username,pasword) VALUES ('{$fname}','{$lname}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

 header("Location: adminLogin.php");

mysqli_close($conn);

?>
