<?
	session_start();
	ob_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>

</head>

<body>
<?php	
	include "connect/dbconnect.php";
	$strSQL = "select * from employee where id_employee = '".($_SESSION['id_employee'])."' and password_id = '".$_POST['passold']."'";
        	$objQuery = mssql_query($strSQL);
	$objResult = mssql_fetch_array($objQuery);
	if(!$objResult){
		echo "<script>alert('Password เดิมไม่ถูกต้อง!')</script>";	
                                echo "<Meta http-equiv='refresh' content='0; URL=main.php?page=pass_change'>";
	}else{
		$sql = "update employee set password_id = '".$_POST[passnew]."' where id_employee = '".$_SESSION['id_employee']."' ";
		$result = mssql_query($sql);
		echo "<script>alert('เปลี่ยน Password เสร็จเรียบร้อย')</script>";
		echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	}	
?>
</body>
</html>