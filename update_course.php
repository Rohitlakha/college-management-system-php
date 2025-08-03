<?php
$stu_id = $_POST['Id'];
$stu_name = $_POST['course'];
$stu_address = $_POST['semester'];


include 'connection.php';

$sql = "UPDATE courseadd SET course = '{$stu_name}', semester = '{$stu_address}' WHERE Id = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: courseManage.php");

mysqli_close($conn);

?>
