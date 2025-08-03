<?php
$stu_id = $_POST['id'];
$stu_fname = $_POST['fname'];
$stu_lname = $_POST['lname'];
$stu_mname = $_POST['mname'];
$stu_ftname = $_POST['ftname'];
$stu_addres = $_POST['addres'];
$stu_gender = $_POST['gender'];
$stu_ste = $_POST['ste'];
$stu_city = $_POST['city'];
$stu_dob = $_POST['dob'];
$stu_pincode = $_POST['pincode'];
$stu_course = $_POST['course'];
$stu_emailid = $_POST['emailid'];


include 'connection.php';

$sql = "UPDATE reg SET fname = '{$stu_fname}', lname = '{$stu_lname}', mname = '{$stu_mname}', ftname = '{$stu_ftname}',addres = '{$stu_addres}', gender = '{$stu_gender}', ste = '{$stu_ste}', city = '{$stu_city}',dob = '{$stu_dob}', pincode = '{$stu_pincode}', course = '{$stu_course}', emailid = '{$stu_emailid}' WHERE id = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: studenttable.php");

mysqli_close($conn);

?>
