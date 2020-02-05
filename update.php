<!DOCTYPE html>
<html>
<body bgcolor="#FFFFCC">
<center>
<h2 style="color:#CC0000">User Edit</h2>
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
$state=$_POST['State'];
$district=$_POST['District'];
$city=$_POST['City'];
$com=$_POST['Component_of_mission'];
$nohof=$_POST['Name_of_head_of_family'];
$gender=$_POST['Gender'];
$fathername=$_POST['Fathers_Name'];
$aohof=$_POST['Age_of_head_of_family'];
$houseno=$_POST['House_no'];
$nos=$_POST['Name_of_street'];
$cityname=$_POST['City_name'];
$distname=$_POST['District_name'];
$mobileno=$_POST['Mobile_no'];
$aadharno=$_POST['Aadhar_no'];
$religion=$_POST['Religion'];
$caste=$_POST['Caste'];
$disability=$_POST['Disability'];
$maristatus=$_POST['Marital_status'];
$hhaii=$_POST['Has_house_anywhere_in_India'];
$ooeh=$_POST['Ownership_of_existing_house'];
$amioh=$_POST['Average_monthly_income_of_household'];


$sql= "UPDATE user_details
	SET State='$state', District='$district', City='$city', Component_of_mission='$com', Name_of_head_of_family='$nohof', Gender='$gender', Fathers_Name = '$fathername', Age_of_head_of_family = '$aohof',
	    House_no = '$houseno', Name_of_street = '$nos', City_name = '$cityname', District_name = '$distname', Mobile_no = '$mobileno', Aadhar_no = '$aadharno', Religion = '$religion',
	     Caste = '$caste', Disability = '$disability', Marital_status = '$maristatus', Has_house_anywhere_in_India = '$hhaii', Ownership_of_existing_house = '$ooeh',
	    Average_monthly_income_of_household = '$amioh'
	WHERE username='$id'";

$result = mysql_query($sql);
if(!$result)
{
	echo "Not updated";
	die (mysql_error());
}
echo "Update results:"."<br>";
echo "State : $state"."<br>";
echo "District : $district"."<br>";
echo "City : $city"."<br>";
echo "Component_of_mission : $com"."<br>";
echo "Name_of_head_of_family : $nohof"."<br>";
echo "Gender : $gender"."<br>";
echo "Fathers_Name : $fathername"."<br>";
echo "Age_of_head_of_family : $aohof"."<br>";
echo "House_no : $houseno"."<br>";
echo "Name_of_street : $nos"."<br>";
echo "City_name : $cityname"."<br>";
echo "District_name : $distname"."<br>";
echo "Mobile_no : $mobileno"."<br>";
echo "Aadhar_no : $aadharno"."<br>";
echo "Religion : $religion"."<br>";
echo "Caste : $caste"."<br>";
echo "Disability : $disability"."<br>";
echo "Marital_status : $maristatus"."<br>";
echo "Has_house_anywhere_in_India : $hhaii"."<br>";
echo "Ownership_of_existing_house : $ooeh"."<br>";
echo "Average_monthly_income_of_household : $amioh"."<br>";

mysql_close($conn);
?>
</td>
</table>
<p style="color:#CC6600"> <a href="Homepage.php">Logout</a> </p>
</center>
</body>
</html>
