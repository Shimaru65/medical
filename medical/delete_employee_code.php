<?php
$pid = $_GET[id_employee];
include "connect/dbconnect.php";
$deleteemployee ="delete from employee where id_employee='$pid'";
$result = mssql_query($deleteemployee);

if($result){ ?>
   <script Language = "javascript">
    alert('yeah')
   </script>
 <?php echo "<meta http-equiv = 'refresh' content='0; url=show_employee.php'>";}else{ ?>
    <script Language = "javascript">
            alert("boi")
    </script>
    <?php echo "<meta http-equiv = 'refresh' content='0; url=edit_employee.php'>";}
?>
