<?php
	session_start();
	if($_SESSION['user_id'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['type_user'] != "admin")
	{
		echo "This page for Admin only!";
		exit();
	}	
	
	include'connect/dbconnect.php';
	$strSQL = "SELECT * FROM employee WHERE user_id = '".$_SESSION['type_user']."' ";
	$objQuery = mssql_query($strSQL);
	$objResult = mssql_fetch_array($objQuery);
?>
<html>
<head>
</head>
<body>
  Welcome to Admin Page! <br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;Username</td>
        <td width="197"><?php echo $objResult["user_id"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Name</td>
        <td><?php echo $objResult["first_name"];?></td>
      </tr>
    </tbody>
  </table>
  <br>
  <a href="show_employee.php">show</a><br>
  <br>
  <a href="logout_code.php">Logout</a>
</body>
</html>