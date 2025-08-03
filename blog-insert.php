<?php

 $nam = $_POST['name1'];
 $email = $_POST['email'];
 $comment = $_POST['comment'];
 

$conn = mysqli_connect("localhost","root","","university") or die("Connection Failed");

$sql = "INSERT INTO blog(name1,email,comment) VALUES ('{$nam}','{$email}','{$comment}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: blog.php");

mysqli_close($conn);

?>
