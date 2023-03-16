<?php
session_destroy();
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
{

}
else
{
    header("location:../login.php");
}
?>