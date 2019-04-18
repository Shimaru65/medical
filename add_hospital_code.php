<meta  charset="windows-874">
<?php
                $hospital = $_POST['hospital_name'];               
                include 'connect/dbconnect.php';   
           $addon = "INSERT INTO hospital (hospital_name) VALUES ('".$hospital."') ";
    $result = mssql_query($addon)or die('Error querying MSSQL database');
if($result){
                   echo" <meta http-equiv = 'refresh' content='0; url=main.php?page=hospital'>";
                }
    ?>
