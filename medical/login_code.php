<?php
	session_start();
	include 'connect/dbconnect.php';
	$strSQL = "SELECT * FROM employee WHERE id_employee = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and password_id = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mssql_query($strSQL);
	$objResult = mssql_fetch_array($objQuery);
	if(!$objResult)
	{
			?>        
                        <meta charset="UTF-8">
			<script Language = "javascript">
                        alert('รหัสพนักงาน หรือ รหัสผ่านผิด โปรดลองอีกครั้ง')
                        </script>
                        
         <?php   
                        echo"<meta http-equiv='refresh' content='0; url=login.php'>";                
	}
	else
	{
			$_SESSION["id_employee"] = $objResult["id_employee"];
			$_SESSION["type_user"] = $objResult["type_user"];

			session_write_close();
			
			if($objResult["type_user"] == "admin")
			{
				header("location:show_employee.php");
			}
			else
			{
				header("location:index.php");
			}
	}
	mysql_close();
?>