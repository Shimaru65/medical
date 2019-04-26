<meta charset="windows-874">
<?php
$list = $_POST[disease_list_name];
include 'connect/dbconnect.php';
$check = "select * from disease_list where disease_list_name = '" . $list . "' ";
$result1 = mssql_query($check) or die(mssql_error());
$num = mssql_num_rows($result1);
if ($num > 0) {
    echo "<script>";
    echo "alert('ชื่อรายการการตรวจโรคซ้ำ กรุณาลองใหม่อีกครั้ง');";
    echo "window.location='main.php?page=disease_list';";
    echo "</script>";
} else {
$addon = "INSERT INTO disease_list (disease_list_name) VALUES ('" . $list . "') ";
$result = mssql_query($addon)or die('Error querying MSSQL database');
if ($result) {
    echo" <meta http-equiv = 'refresh' content='0; url=main.php?page=disease_list'>";
}
}
?>
