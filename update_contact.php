<?php
$stu_id = $_POST['id'];
$stu_fname = $_POST['name1'];
$stu_lname = $_POST['email'];
$stu_mname = $_POST['subject1'];
$stu_m = $_POST['message1'];



include 'connection.php';

$sql = "UPDATE contact SET name1 = '{$stu_fname}', email = '{$stu_lname}', subject1 = '{$stu_mname}', message1 = '{$stu_m}' WHERE Id = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: Managecontact.php");

mysqli_close($conn);

?>
