<?php
include '../includes/connect.php';
$success=false;

$username = $_POST['username'];
$password = $_POST['password'];
$role=$_POST['role'];
$result = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'");
while($row = mysqli_fetch_array($result))
{
	$success = true;
	$user_id = $row['id'];
	$name = $row['username'];
	$role= $row['role'];
}
if($success == true)
{	
	session_start();
	$_SESSION['admin_sid']=session_id();
	$_SESSION['user_id'] = $user_id;
	$_SESSION['role'] = $role;
	$_SESSION['name'] = $name;
	if($role=='admin')
	{
		header("location: ../admin/admin.php");
	}
	else{
		header("location:../member/index.php");
	}
}

	else
	{
		header("location: ../login.php");
	}

?>