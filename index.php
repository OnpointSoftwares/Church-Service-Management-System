<!DOCTYPE html>
<html>
    <head><title>Kabarak Church Management System</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    <body>
        <div class="header">
        <h1><img src="images/logo.png" width="170" height="155" align="middle" style="border-radius:90px">Kabarak Church Management System</h1>
        <div class="nav">
            <ul>
                <li class="active"><a href="index.php?page=Home">Home</a></li>
                <li><a href="index.php?page=About">About </a></li>
                <li><a style="cursor:pointer" href="login.php">Login</a> </li>
                <li><a href="index.php?page=contacts">Contact Us</a></li>
                <li><a href="index.php?page=member/offerings">Offerings</a></li>
</ul>
</div>
</div>

<br><br><br>
<div class="content">
<?php
if(isset($_GET['error']))
{
$error=$_GET['error'];
if($error != null)
{
  ?>
<script>
  alert('Wrong username or password. Try again or create new account');
</script>
  <?php
}
else{
  
}
if(isset($_GET['success']))
{
$success=$_GET['success'];
if($success==1)
{
  ?>
<script>
  alert('Signup successfull');
</script>
  <?php
}
else{
  
}
}
}
if(isset($_GET['page']))
{
    $page=$_GET['page'];
}
else{
    $page="Home";
}
include($page.".php");
?>
</div>
<script>
var slidePosition = 0;
SlideShow();

function SlideShow() {
  var i;
  var slides = document.getElementsByClassName("Containers");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slidePosition++;
  if (slidePosition > slides.length) {slidePosition = 1}
  slides[slidePosition-1].style.display = "block";
  setTimeout(SlideShow, 3500); // Change image every 2 seconds
} 
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>
  
    <div class="footer">
    <ul>
                <li class="active"><a href="index.php?page=Home">Home</a></li>
                <li><a href="index.php?page=About">About </a></li>
                <li><a style="cursor:pointer" href="login.php">Login</a> </li>
                <li><a href="index.php?page=contacts">Contact Us</a></li>
                <li><a href="index.php?page=member/offerings">Offerings</a></li>
</ul>

<center>copyright &copy 2023</center>
</div>
</body>