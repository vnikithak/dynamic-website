<!DOCTYPE html>
<html>
  <head>
    <title>User Login Page</title>
  </head>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      if (isset($_POST['login']))
  	{
          require 'userlog.php';
      }
  }
  ?>
  <body align="center" bgcolor="FFFFCC">
    <center>
      <h2>User Login:</h2>
      <table border="1">
        <td valign="center">
        <form action="userlog.php" method="POST">
          User ID:  <input type="text" name="username" size="10"/>
          <br>
          Password:  <input type="text" name="password" size="10"/>
          <br>
          <input type="submit" id="btn" value="Login">
        </form>
        </td>
      </table>
      <p style="color:#CC6600"> <a href="Homepage.php">Homepage</a> </p>
    </center>
  </body>
</html>
