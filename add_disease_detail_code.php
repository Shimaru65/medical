<meta charset="windows-874">
<?php
$disease_id = $_GET[disease_id];
$detail = $_POST[detail_name];
include 'connect/dbconnect.php';
$check = "select * from disease_detail where detail_name = '" . $detail . "' AND disease_id='".$disease_id."' ";
$result1 = mssql_query($check) or die(mssql_error());
$num = mssql_num_rows($result1);
if ($num > 0) {
    echo "<script>";
    echo "alert('ชื่อรายละเอียดซ้ำกัน กรุณาลองใหม่อีกครั้ง');";
    echo "</script>";
    echo" <meta http-equiv = 'refresh' content='0; url=main.php?page=disease_detail&disease_id=$disease_id'>";
} else {
$addon = "INSERT INTO disease_detail (disease_id,detail_name) VALUES ('".$disease_id."','" . $detail . "') ";
$result = mssql_query($addon)or die('Error querying MSSQL database');
if ($result) {
    echo" <meta http-equiv = 'refresh' content='0; url=main.php?page=disease_detail&disease_id=$disease_id'>";
}
}
?>
