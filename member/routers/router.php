<html>
	<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<?php
include '../includes/connect.php';
$success=false;
$email=$_POST['email'];
$amount = $_POST['amount'];
$type= $_POST['type'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$_SESSION['email']=$email;
$_SESSION['name']=$name;
$_SESSION['amount']=$amount;
$_SESSION['type']=$_POST['type'];
$result = mysqli_query($con, "insert into offerings(Name,Type,Amount,Phone) values('$name','$type','$amount','$phone')");
if($result)
{
	?><script>
	$.ajax({
		url:'mail.php',
		type: "POST",
		success: function(data)
		{
		  alert("Giving Successfull.Check your email for confirmation"); // show response from the php script.
		}
	  }); 
	  </script>
	  <?php
	  ?>
	  <a href="../">Go back</a>
	  <?php
}
else{
	header("location:../index.php?page=offerings&&success=false");
	}

?>
</body>
<html>