<?php
session_destroy();
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
{

}
else
{
    header("location:/CHURCH-SERVICE-MANAGEMENT-SYSTEM/login.php");
}
?>