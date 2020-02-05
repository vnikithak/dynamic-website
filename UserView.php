<!DOCTYPE html>
<html>
<head>
<title>
User Options
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFCC">
<center>
<h2 style="color:#CC0000">User Details</h2>
<table border="1">
<td valign="center">
<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('login');

	$sql="SELECT * from user_details WHERE username = '$_SESSION[username]' and password = '$_SESSION[password]'";
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
		die('Could not get data: ' . mysql_error());
	}
	while($row = mysql_fetch_array($retval))
	{
	echo "State : {$row[0]}  <br> ".
		 "District : {$row[1]} <br> ".
         "City : {$row[2]} <br> ".
         "Component of mission : {$row[3]} <br> ".
	"Name of head of family : {$row[4]} <br> ".
	"Gender : {$row[5]} <br> ".
	"Father's Name : {$row[6]} <br> ".
	"Age of head of family : {$row[7]} <br> ".
	"House no. : {$row[8]} <br> ".
	"Name of street/slum : {$row[9]} <br> ".
	"City name : {$row[10]} <br> ".
	"District name : {$row[11]} <br> ".
	"Mobile no. : {$row[12]} <br> ".
	"Aadhar no. : {$row[13]} <br> ".
	"Religion : {$row[14]} <br> ".
	"Caste : {$row[15]} <br> ".
	"Disability : {$row[16]} <br> ".
	"Marital status : {$row[17]} <br> ".
	"Has house anywhere in India : {$row[18]} <br> ".
	"Ownership of existing house : {$row[19]} <br> ".
	"Average monthly income of household : {$row[20]} <br> ".
	"Status : {$row[23]} <br> ";
	}

mysql_close($conn);
?>

</td>
</table>
<p style="color:#CC6600"> <a href="Homepage.php">Logout</a> </p>
</center>
</body>
</html>
