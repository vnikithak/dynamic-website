<!DOCTYPE html>
<html>
<head>
<title>
User Edit
</title>
</head>
<body bgcolor="#FFFFCC">
<center>
<h2 style="color:#CC0000">User Edit</h2>
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
echo 'Update user information';
mysql_select_db('login');

$sql= "SELECT State, District, City, Component_of_mission, Name_of_head_of_family, Gender, Fathers_Name, Age_of_head_of_family, House_no, Name_of_street,
	City_name, District_name, Mobile_no, Aadhar_no, Religion, Caste, Disability, Marital_status, Has_house_anywhere_in_India, Ownership_of_existing_house,
	Average_monthly_income_of_household, username, password, status
        FROM user_details WHERE username='$_SESSION[username]' and password='$_SESSION[password]'";

$result = mysql_query( $sql, $conn );

if(!$result)
{
	echo "Not updated";
	die (mysql_error());
}
else
{
	while($record = mysql_fetch_array($result))
	{
		$id=$record['username'];
		$state=$record['State'];
		$district=$record['District'];
		$city=$record['City'];
		$com=$record['Component_of_mission'];
		$nohof=$record['Name_of_head_of_family'];
		$gender=$record['Gender'];
		$fathername=$record['Fathers_Name'];
		$aohof=$record['Age_of_head_of_family'];
		$houseno=$record['House_no'];
		$nos=$record['Name_of_street'];
		$cityname=$record['City_name'];
		$distname=$record['District_name'];
		$mobileno=$record['Mobile_no'];
		$aadharno=$record['Aadhar_no'];
		$religion=$record['Religion'];
		$caste=$record['Caste'];
		$disability=$record['Disability'];
		$maristatus=$record['Marital_status'];
		$hhaii=$record['Has_house_anywhere_in_India'];
		$ooeh=$record['Ownership_of_existing_house'];
		$amioh=$record['Average_monthly_income_of_household'];
	}
	print<<<HERE
	<form id='myForm' method="POST" action="update.php">
	<input type="hidden" name="username" value="$id"/>
	<div>
	<label for="State">State : </label>
	<input type="text" name="State" id="State" value="$state">
	</div>
	<div>
	<label for="District">District : </label>
	<input type="text" name="District" id="District" value="$district">
	</div>
	<div>
	<label for="City">City : </label>
	<input type="text" name="City" id="City" value="$city">
	</div>
	<div>
	<label for="Component_of_mission">Component_of_mission : </label>
	<input type="text" name="Component_of_mission" id="Component_of_mission" value="$com">
	</div>
	<div>
	<label for="Name_of_head_of_family">Name_of_head_of_family : </label>
	<input type="text" name="Name_of_head_of_family" id="Name_of_head_of_family" value="$nohof">
	</div>
	<div>
	<label for="Gender">Gender : </label>
	<input type="text" name="Gender" id="Gender" value="$gender">
	</div>
	<div>
	<label for="Fathers_Name">Fathers_Name : </label>
	<input type="text" name="Fathers_Name" id="Fathers_Name" value="$fathername">
	</div>
	<div>
	<label for="Age_of_head_of_family">Age_of_head_of_family : </label>
	<input type="text" name="Age_of_head_of_family" id="Age_of_head_of_family" value="$aohof">
	</div>
	<div>
	<label for="House_no">House_no : </label>
	<input type="text" name="House_no" id="House_no" value="$houseno">
	</div>
	<div>
	<label for="Name_of_street">Name_of_street : </label>
	<input type="text" name="Name_of_street" id="Name_of_street" value="$nos">
	</div>
	<div>
	<label for="City_name">City_name : </label>
	<input type="text" name="City_name" id="City_name" value="$cityname">
	</div>
	<div>
	<label for="District_name">District_name : </label>
	<input type="text" name="District_name" id="District_name" value="$distname">
	</div>
	<div>
	<label for="Mobile_no">Mobile_no : </label>
	<input type="text" name="Mobile_no" id="Mobile_no" value="$mobileno">
	</div>
	<div>
	<label for="Aadhar_no">Aadhar_no : </label>
	<input type="text" name="Aadhar_no" id="Aadhar_no" value="$aadharno">
	</div>
	<div>
	<label for="Religion">Religion : </label>
	<input type="text" name="Religion" id="Religion" value="$religion">
	</div>
	<div>
	<label for="Caste">Caste : </label>
	<input type="text" name="Caste" id="Caste" value="$caste">
	</div>
	<div>
	<label for="Disability">Disability : </label>
	<input type="text" name="Disability" id="Disability" value="$disability">
	</div>
	<div>
	<label for="Marital_status">Marital_status : </label>
	<input type="text" name="Marital_status" id="Marital_status" value="$maristatus">
	</div>
	<div>
	<label for="Has_house_anywhere_in_India">Has_house_anywhere_in_India : </label>
	<input type="text" name="Has_house_anywhere_in_India" id="Has_house_anywhere_in_India" value="$hhaii">
	</div>
	<div>
	<label for="Ownership_of_existing_house">Ownership_of_existing_house : </label>
	<input type="text" name="Ownership_of_existing_house" id="Ownership_of_existing_house" value="$ooeh">
	</div>
	<div>
	<label for="Average_monthly_income_of_household">Average_monthly_income_of_household : </label>
	<input type="text" name="Average_monthly_income_of_household" id="Average_monthly_income_of_household" value="$amioh">
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
