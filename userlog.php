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
if(isset($_POST['username'], $_POST['password']))
{
    $username = trim($_POST['username']);
	$username = stripslashes($username);
	$username = mysql_real_escape_string($username);
    $password = trim($_POST['password']);
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
	$result = mysql_query("SELECT username, password FROM user_details WHERE username = '$username' and password = '$password'");
	if(!$result)
	{
		die (mysql_error());
	}
	$row = mysql_fetch_array($result);
	$count = mysql_num_rows($result);
	if( $count==0)
	{
		header("location: UserLoginPage.php");
	}
	else
	{
		if( ($row['username']==$username) && ($row['password']==$password))
		{
			session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['logged_in'] = true;
			header("location: UserOptions.php");
		}
		else
		{
			header("location: UserLoginPage.php");
		}
	}
}
mysql_close($conn);
?>
