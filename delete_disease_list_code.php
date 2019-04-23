<meta charset="windows-874">
    <?php
$disid = $_GET[disease_id];
include "connect/dbconnect.php";
$deletedisease ="delete from disease_list where disease_id = '$disid'";
$result = mssql_query($deletedisease);
if($result){ ?>
   <script Language = "javascript">
    alert('success')
   </script>
 <?php echo "<meta http-equiv = 'refresh' content='0; url=main.php?page=disease_list'>";}else{ ?>
    <script Language = "javascript">
            alert("nope")
    </script> <?php echo "<meta http-equiv = 'refresh' content='0; url=main.php?page=disease_list'>";}
?>
    