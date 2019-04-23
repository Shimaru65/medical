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
                        <meta charset="windows-874">
			<script Language = "javascript">
                        alert('รหัสพนักงาน หรือ รหัสผ่านผิด โปรดลองอีกครั้ง')
                        </script>
                        
         <?php   
                        echo"<meta http-equiv='refresh' content='0; url=index.php'>";                
	}
	else
	{
			$_SESSION["id_employee"] = $objResult["id_employee"];
			$_SESSION["type_user"] = $objResult["type_user"];
                                                $_SESSION["file_menu"] =  $objResult["file_menu"];
			session_write_close();
			
			if($objResult["type_user"] == "admin")
			{
				header("location:main.php?page=home");
			}
			else
			{
				header("location:main.php?page=home");
                          
			}
	}
	mysql_close();
?>