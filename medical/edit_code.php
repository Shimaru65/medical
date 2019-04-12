<?php
$idemployee = $_POST['id_employee'];
                $fname   =  $_POST['first_name'];
                $lname  =  $_POST['last_name'];
                $idde =  $_POST['id_department'];
                $posi   =  $_POST['position'];
                $usetype = $_POST['type_user'];
                include 'connect/dbconnect.php';  
                $edit = "UPDATE employee SET first_name='".$fname."',last_name='".$lname."',id_department='".$idde."',position='".$posi."',type_user='".$usetype."' WHERE id_employee='".$idemployee."'";
                $result = mssql_query($edit)or die('Error querying MSSQL database');
                if($result){
                   echo" <meta http-equiv = 'refresh' content='0; url=show_employee.php'>";
                }

?>