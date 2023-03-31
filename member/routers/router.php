<?php
include '../includes/connect.php';
$success=false;

$amount = $_POST['amount'];
$type= $_POST['type'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$result = mysqli_query($con, "insert into offerings(Name,Type,Amount,Phone) values('$name','$type','$amount','$phone')");
if($result)
{
	//header("location:../index.php?page=offerings&&success=true");
}
else{
	//header("location:../index.php?page=offerings&&success=false");
	}

?>