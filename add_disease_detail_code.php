<meta charset="windows-874">
<?php
$disease_id = $_GET['disease_id'];
$detail = $_POST['detail_name'];
include 'connect/dbconnect.php';
$addon = "INSERT INTO disease_detail (disease_id,detail_name) VALUES ('".$disease_id."','" . $detail . "') ";
$result = mssql_query($addon)or die('Error querying MSSQL database');
if ($result) {
    echo" <meta http-equiv = 'refresh' content='0; url=main.php?page=disease_detail&disease_id=$disease_id'>";
}
?>
