<?php

$stu_id = $_GET['id'];

include 'connection.php';

$sql = "DELETE FROM reg WHERE id = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: ManageStudent.php");

mysqli_close($conn);

?>
