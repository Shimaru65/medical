<meta charset="windows-874">
<?php
$disease = $_POST['disease_name'];
include 'connect/dbconnect.php';
$addon = "INSERT INTO disease_list (disease_name) VALUES ('" . $disease . "') ";
$result = mssql_query($addon)or die('Error querying MSSQL database');
if ($result) {
    echo" <meta http-equiv = 'refresh' content='0; url=main.php?page=hospital'>";
}
?>
