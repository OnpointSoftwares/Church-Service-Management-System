<?php
include 'connect.php';
$success=false;

$name = $_POST['name'];
$desc = $_POST['description'];
$Date=$_POST['date'];
$result = mysqli_query($con, "insert into events(Event,Description,Date) values('$name','$desc','$Date')");
if($result)
{
	echo "<script>alert('Event Successfully added');</script>";
	header("location:../admin.php");
}
?>