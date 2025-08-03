<?php

$stu_id = $_GET['id'];

include 'connection.php';

$sql = "DELETE FROM blog WHERE Id = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: Manageblog.php");

mysqli_close($conn);

?>
