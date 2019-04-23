<meta charset="windows-874">
<?php
$list = $_POST['disease_list_name'];
include 'connect/dbconnect.php';
$addon = "INSERT INTO disease_list (disease_list_name) VALUES ('" . $list . "') ";
$result = mssql_query($addon)or die('Error querying MSSQL database');
if ($result) {
    echo" <meta http-equiv = 'refresh' content='0; url=main.php?page=disease_list'>";
}
?>
