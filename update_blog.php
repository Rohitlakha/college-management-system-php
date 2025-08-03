<?php
$stu_id = $_POST['Id'];
$stu_fname = $_POST['name1'];
$stu_lname = $_POST['email'];
$stu_mname = $_POST['comment'];



include 'connection.php';

$sql = "UPDATE blog SET name1 = '{$stu_fname}', email = '{$stu_lname}', comment = '{$stu_mname}' WHERE id = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: Manageblog.php");

mysqli_close($conn);

?>
