<?php

 $name = $_POST['name1'];
 $email = $_POST['email'];
 $subject = $_POST['subject1'];
 $message = $_POST['message1'];

$conn = mysqli_connect("localhost","root","","university") or die("Connection Failed");

$sql = "INSERT INTO contact(name1,email,subject1,message1) VALUES ('{$name}','{$email}','{$subject}','{$message}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: contact.php");

mysqli_close($conn);

?>
