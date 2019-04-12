<html>
    <head><meta charset="UTF-8"></head>
    <body>
     <center>ข้อมูลพนักงานทั้งหมด<br> 
    <table border=1 cellspacing=0 width=80%>
        <tr>
            <td>รหัสพนักงาน</td>
            <td>ชื่อพนักงาน</td>
            <td>เเผนก</td>
            <td>ตำเเหน่ง</td>
            <td>สถานะ</td>
            <td>เเก้ใขพนักงาน</td>
            <td>ลบพนักงาน</td>
        </tr>
    
     
<?php
include "connect/dbconnect.php";
$showemployee = "select *from employee ";
$result = mssql_query($showemployee);
while ($record = mssql_fetch_array($result)){
  echo" <tr>
            <td>$record[id_employee]</td>
            <td>$record[first_name]\t$record[last_name]</td>
            <td>$record[id_department]</td>
            <td>$record[position]</td>
            <td>$record[type_user]</id>
            <td><a href='edit_employee.php'>เเก้ใข้</a></td>
            <td><a href='delete_employee_code.php?id_employee=$record[id_employee]'>ลบ</a></td>
        </tr>";
}
?>
        
</table>
         <a href=regis_test.php>เพิ่มข้อมูลพนักงาน</a><br>
         <a href=logout_code.php>ออกจากระบบ</a>
     </center>;                    
   </body>   
</html>