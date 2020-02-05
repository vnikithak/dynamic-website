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

if(isset($_POST['username']))
{
	//code to prevent SQL injections during authentication process
    $username = trim($_POST['username']);
	$username = stripslashes($username);
	$username = mysql_real_escape_string($username);

	if(empty($username))
	{
		echo "Please enter your User name.";
	}

	$result = mysql_query("SELECT username FROM user_details WHERE username = '$username'");
	if(!$result)
	{
		die (mysql_error());
	}

	$row = mysql_fetch_array($result);
	$count = mysql_num_rows($result);

	if( $count==0)
	{
		header("location: AdminViewUpdate.php");
	}
	else
	{
		if( ($row['username']==$username))
		{
			session_start();
			$_SESSION['username'] = $row['username'];
			$_SESSION['logged_in'] = true;
			header("location: AdminEdit.php");
		}
		else
		{
			header("location: AdminViewUpdate.php");
		}
	}
}

mysql_close($conn);
?>
