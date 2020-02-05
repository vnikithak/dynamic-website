<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$dbcon=mysql_select_db('login');
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}
if(! $dbcon )
{
	die('Database Connection failed: ' . mysql_error());
}
if(isset($_POST['Username'], $_POST['Password']))
{
    $username = trim($_POST['Username']);
	$username = stripslashes($username);
	$username = mysql_real_escape_string($username);
    $password = trim($_POST['Password']);
	$password = stripslashes($password);
	$password = mysql_real_escape_string($password);
	if(empty($username))
	{
		echo "Please enter your User name.";
	}
	if(empty($password))
	{
		echo "Please enter your Password.";
	}
	$result = mysql_query("SELECT Username, Password, Name_of_administrator FROM admin_details WHERE Username = '$username' and Password = '$password'");
	if(!$result)
	{
		die (mysql_error());
	}
	$row = mysql_fetch_array($result);
	$count = mysql_num_rows($result);
	if( $count==0)
	{
		header("location: AdminLoginPage.php");
	}
	else
	{
		if( ($row['Username']==$username) && ($row['Password']==$password))
		{
			$_SESSION['Username'] = $row['Username'];
			$_SESSION['Password'] = $row['Password'];
			$_SESSION['logged_in'] = true;
			header("location: AdminViewUpdate.php");
		}
		else
		{
			header("location: AdminLoginPage.php");
		}
	}
}

mysql_close($conn);
?>
