<!DOCTYPE html>
<html>
	<head>
		<title>
			Admin View/Edit
		</title>
	</head>

	<body bgcolor="#FFFFCC">
	<center>
		<h2 style="color:#CC0000">Admin View/Edit</h2>
		<table border="1">

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

			if(isset($_POST['Update']))
			{
				$UpdateQuery = "UPDATE user_details SET status='$_POST[status]'";
				mysql_query($UpdateQuery, $conn);
			};

			$sql= "SELECT State, District, City, Component_of_mission, Name_of_head_of_family, Gender, Fathers_Name, Age_of_head_of_family, House_no, Name_of_street,
			City_name, District_name, Mobile_no, Aadhar_no, Religion, Caste, Disability, Marital_status, Has_house_anywhere_in_India, Ownership_of_existing_house,
			Average_monthly_income_of_household, username, password, status
				FROM user_details";

			$result = mysql_query( $sql, $conn );
			echo "<tr>
			<th>username</th>
			<th>password</th>
			<th>State</th>
			<th>District</th>
			<th>City</th>
			<th>Component_of_mission</th>
			<th>Name_of_head_of_family</th>
			<th>Gender</th>
			<th>Fathers_Name</th>
			<th>Age_of_head_of_family</th>
			<th>House_no</th>
			<th>Name_of_street</th>
			<th>City_name</th>
			<th>District_name</th>
			<th>Mobile_no</th>
			<th>Aadhar_no</th>
			<th>Religion</th>
			<th>Caste</th>
			<th>Disability</th>
			<th>Marital_status</th>
			<th>Has_house_anywhere_in_India</th>
			<th>Ownership_of_existing_house</th>
			<th>Average_monthly_income_of_household</th>
			<th>status</th>
			</tr>";

			while($record = mysql_fetch_array($result))
			{
				echo "<form action=AdminViewUpdate.php method=post>";
				echo "<tr>";
				echo "<td>" . $record['username'] . "</td>";
				echo "<td>" . $record['password'] . "</td>";
				echo "<td>" . $record['State'] . "</td>";
				echo "<td>" . $record['District'] . "</td>";
				echo "<td>" . $record['City'] . "</td>";
				echo "<td>" . $record['Component_of_mission'] . "</td>";
				echo "<td>" . $record['Name_of_head_of_family'] . "</td>";
				echo "<td>" . $record['Gender'] . "</td>";
				echo "<td>" . $record['Fathers_Name'] . "</td>";
				echo "<td>" . $record['Age_of_head_of_family'] . "</td>";
				echo "<td>" . $record['House_no'] . "</td>";
				echo "<td>" . $record['Name_of_street'] . "</td>";
				echo "<td>" . $record['City_name'] . "</td>";
				echo "<td>" . $record['District_name'] . "</td>";
				echo "<td>" . $record['Mobile_no'] . "</td>";
				echo "<td>" . $record['Aadhar_no'] . "</td>";
				echo "<td>" . $record['Religion'] . "</td>";
				echo "<td>" . $record['Caste'] . "</td>";
				echo "<td>" . $record['Disability'] . "</td>";
				echo "<td>" . $record['Marital_status'] . "</td>";
				echo "<td>" . $record['Has_house_anywhere_in_India'] . "</td>";
				echo "<td>" . $record['Ownership_of_existing_house'] . "</td>";
				echo "<td>" . $record['Average_monthly_income_of_household'] . "</td>";
				echo "<td>" . $record['status'] . "</td>";
				echo "</tr>";
				echo "</form>";
			}
			echo "</table>";

			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				if (isset($_POST['login']))
				{
					require 'userselect.php';
				}
			}
		?>

		<center>
			<h2>Select User to Edit Status:</h2>
			<table border="1">
				<td valign="center">
					<form action="userselect.php" method="POST">
						User ID:  <input type="text" name="username" size="10"/>
						<br>
						<input type="submit" id="btn" value="Select">
					</form>
				</td>
			</table>
		</center>

		<?php
			mysql_close($conn);
		?>

		</table>
		<p style="color:#CC6600"> <a href="Homepage.php">Logout</a> </p>

		</center>
	</body>
</html>
