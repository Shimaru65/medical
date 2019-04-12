<?php
                $idemployee = $_POST['id_employee'];
                $fname   =  $_POST['first_name'];
                $lname  =  $_POST['last_name'];
                $idde =  $_POST['id_department'];
                $posi   =  $_POST['position'];
                $type   =   $_POST['type_user'];
                include 'connect/dbconnect.php';                
   $addon = "INSERT INTO employee";
   $addon .= "(id_employee,first_name,last_name,id_department,position,type_user) VALUES('".$idemployee."','".$fname."','".$lname."','".$idde."','".$posi."','".$type."')";
    $result = mssql_query($addon)or die('Error querying MSSQL database');
if($result){
                   echo" <meta http-equiv = 'refresh' content='0; url=show_employee.php'>";
                }
    ?>