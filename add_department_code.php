<meta charset="windows-874">
<?php
$Department_id = $_POST[department_id];
$Department_name = $_POST[department_name];
include 'connect/dbconnect.php';
$check = "select * from department  where department_id = '".$Department_id."' OR department_name = '".$Department_name."' ";
	  $result1 = mssql_query($check) or die(mssql_error());
		$num=mssql_num_rows($result1); 
        if($num > 0)   		
        {
             echo "<script>";
			 echo "alert(' รหัสแผนกซ้ำหรือชื่อแผนกซ้ำ กรุณาลองอีกครั้ง');";
			 echo "window.location='main.php?page=add_department';";
          	 echo "</script>";

		}else{
$addon = "INSERT INTO department(department_id,department_name) VALUES ('" . $Department_id . "','" . $Department_name . "') ";
$result = mssql_query($addon);
?>
<script>alert('เพิ่มแผนกสำเร็จ')</script>
<?php
echo" <meta http-equiv = 'refresh' content='0; url=main.php?page=add_department'>";
                }
?>
