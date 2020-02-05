<!DOCTYPE html>
<html>
<head>
<title>Administrator Login Page</title>
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login']))
	{
        require 'adminlog.php';
    }
}
?>
<body align="center" bgcolor="FFFFCC">
<center>
<h2>Administrator Login:</h2>
<table border="1">
<td valign="center">
<form action="adminlog.php" method="POST">
User ID:  <input type="text" name="Username" size="10"/>
<br>
Password:  <input type="text" name="Password" size="10"/>
<br>
<input type="submit" id="btn" value="Login">
</form>
</td>
</table>
<p style="color:#CC6600"> <a href="Homepage.php">Homepage</a> </p>
</center>
</body>
</html>
