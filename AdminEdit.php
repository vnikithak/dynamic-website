<!DOCTYPE html>
<html>
	<head>
		<title>
			Admin Edit
		</title>
	</head>

	<body bgcolor="#FFFFCC">
		<center>
			<h2 style="color:#CC0000">Admin Edit</h2>
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
				echo 'Update user status:';

				mysql_select_db('login');

				$sql= "SELECT username, status
					FROM user_details WHERE username='$_SESSION[username]'";

				$result = mysql_query( $sql, $conn );

				if(!$result)
				{
					echo "Not updated";
					die (mysql_error());
				}
				else
				{
					//use variables to store the values retrieved from the database
					while($record = mysql_fetch_array($result))
					{
						$id=$record['username'];
						$status=$record['status'];

					}
					print<<<HERE
					<form id='myForm' method="POST" action="adminupdate.php">
					<input type="hidden" name="username" value="$id"/>
					<div>
					<label for="status">Status : </label>
					<input type="text" name="status" id="status" value="$status">
					</div>
					<div id="mySubmit">
					<input class='submit' name = 'submit' type='submit' value = 'Update'/>
					</div>
					</form>
HERE;
				}
mysql_close($conn);
?>

</td>
</table>
<p style="color:#CC6600"> <a href="Homepage.php">Logout</a> </p>
</center>
</body>
</html>
