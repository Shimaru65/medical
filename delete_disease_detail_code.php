<meta charset="windows-874">
    <?php
$detailid = $_GET[detail_id];
include "connect/dbconnect.php";
$deletedisease ="delete from disease_detail where detail_id = '$detailid'";
$result = mssql_query($deletedisease);
if($result){ ?>
   <script Language = "javascript">
    alert('success')
   </script>
 <?php echo "<meta http-equiv = 'refresh' content='0; url=main.php?page=disease_detail&disease_id=$_GET[disease_id]'>";}else{ ?>
    <script Language = "javascript">
            alert("nope")
    </script> <?php echo "<meta http-equiv = 'refresh' content='0; url=main.php?page=disease_detail'>";}
?>
    