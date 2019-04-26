<meta charset="windows-874">
<?php
$hospital = $_POST[hospital_name];
include 'connect/dbconnect.php';
$check = "select * from hospital  where hospital_name = '" . $hospital . "' ";
$result1 = mssql_query($check) or die(mssql_error());
$num = mssql_num_rows($result1);
if ($num > 0) {
    echo "<script>";
    echo "alert('ชื่อสถานพยาบาลซ้ำ กรุณาลองใหม่อีกครั้ง');";
    echo "window.location='main.php?page=hospital';";
    echo "</script>";
} else {
    $addon = "INSERT INTO hospital (hospital_name) VALUES ('" . $hospital . "') ";
    $result = mssql_query($addon)or die('Error querying MSSQL database');
    if ($result) {
        echo" <meta http-equiv = 'refresh' content='0; url=main.php?page=hospital'>";
    }
}
?>
