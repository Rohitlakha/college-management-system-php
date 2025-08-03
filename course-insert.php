<?php
$course = $_POST['course'];
$semester = $_POST['semester'];



$conn = mysqli_connect("localhost","root","","university") or die("Connection Failed");

$sql = "INSERT INTO courseadd(course,semester) VALUES ('{$course}','{$semester}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

 header("Location: courseADD.php");

mysqli_close($conn);

?>