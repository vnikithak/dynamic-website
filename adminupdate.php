<!DOCTYPE html>
<html>
	<body bgcolor="#FFFFCC">
		<center>
			<h2 style="color:#CC0000">Admin Edit Results</h2>
			<table border="1">
			<td valign="center">
			<?php
				$dbhost = 'localhost';
				$dbuser = 'root';
				$dbpass = '';

				$conn = mysql_connect($dbhost, $dbuser, $dbpass);
				if(! $conn )
				{
					die('Could not connect: ' . mysql_error());
				}

				mysql_select_db('login');

				$id=$_POST['username'];
				$status=$_POST['status'];

				$sql= "UPDATE user_details
				SET status = '$status'
					WHERE username='$id'";

				$result = mysql_query($sql);
				if(!$result)
				{
					echo "Not updated";
					die (mysql_error());
				}
				echo "Update results:"."<br>";
				echo "Status : $status"."<br>";

				mysql_close($conn);
			?>
			</td>
			</table>
			<p style="color:#CC6600"> <a href="AdminViewUpdate.php">Back To Administrator Page</a> </p>
			<p style="color:#CC6600"> <a href="Homepage.php">Logout</a> </p>
		</center>
	</body>
</html>
