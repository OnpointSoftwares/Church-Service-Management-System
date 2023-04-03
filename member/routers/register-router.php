<?php
include '../includes/connect.php';
$name = htmlspecialchars($_POST['name']);
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['currentpassword']);
$newpassword = htmlspecialchars($_POST['newpassword']);

function number($length) {
    $result = '';

    for($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }

    return $result;
}

$sql = "update users set password='$newpassword',name='$name' where username='$username' and password='$password'";
if($con->query($sql)==true){
$user_id =  $con->insert_id;
header("location:/CHURCH-SERVICE-MANAGEMENT-SYSTEM/login.php");
}
else{
    echo mysqli_error($con);
}
?>