<?php

$stu_id = $_GET['id'];

include 'connection.php';

$sql = "DELETE FROM courseadd WHERE Id = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: courseManage.php");

mysqli_close($conn);

?>
