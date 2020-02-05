<!DOCTYPE html>
<html>
<head>
<title>
user options
</title>
</head>
<body bgcolor="#FFFFCC">
<center>
<h2 style="color:#CC0000">User options</h2>
<?php
session_start();
echo "Welcome ";
echo $_SESSION['username'];
$_SESSION['password'];
?>
</center>
<h3 style="color:#CC3333">View details</h3>
<p style="color:#CC6600"><a href="UserView.php">View</a>
<h3 style="color:#CC3333">Update details</h3>
<p style="color:#CC6600"> <a href="UserUpdate.php">Update</a> </p>
<center>
<p style="color:#CC6600"> <a href="Homepage.php">Logout</a> </p>
<center>
</body>
</html>
