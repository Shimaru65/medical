<meta charset="windows-874">
    <?php
$hosid = $_GET[hospital_id];
include "connect/dbconnect.php";
$deletehospital ="delete from hospital where hospital_id = '$hosid'";
$result = mssql_query($deletehospital);
if($result){ ?>
   <script Language = "javascript">
    alert('success')
   </script>
 <?php echo "<meta http-equiv = 'refresh' content='0; url=main.php?page=hospital'>";}else{ ?>
    <script Language = "javascript">
            alert("nope")
    </script> <?php echo "<meta http-equiv = 'refresh' content='0; url=main.php?page=hospital'>";}
?>
    