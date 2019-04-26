<?php

$IDemployee = $_POST[pass_employee];
$disease_ID = $_POST[pass_disease_id];
$hospitalID = $_POST[select_hospital];
$loop_input = $_POST[pass_loop];
$day = date('d', strtotime($_POST['date']));
$month = date('m', strtotime($_POST['date']));
$year = date('Y', strtotime($_POST['date']));
date_default_timezone_set("Asia/Bangkok");
$time = date('h:i:sa');
$i = 0;
echo "$time";
include 'connect/dbconnect.php';
while ($i < $loop_input) {
    $txtinput = $_POST[txtinput . $i];
    $add_data = "INSERT INTO result (id_employee, disease_id, hospital_id, result, hour, day, month, year) VALUES ('" . $IDemployee . "','" . $disease_ID . "','" . $hospitalID . "','" . $txtinput . "','" . $time . "','" . $day . "','" . $month . "','" . $year . "')";
    $result = mssql_query($add_data)or die('Error querying MSSQL database');
    $i++;
}
if ($result) {
    $add_check = "INSERT INTO check_result (id_employee,disease_id,hospital_id,day,month,year) VALUES ('".$IDemployee."','".$disease_ID."','" . $hospitalID . "','" . $day . "','" . $month . "','" . $year . "')";
    $result_check = mssql_query($add_check)or die('Error quering MSSQL to Check_result Table');
    echo" <meta http-equiv = 'refresh' content='0; url=main.php?page=main_add_result'>";
}
?>
