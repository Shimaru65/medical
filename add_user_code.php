<meta charset="windows-874">
<?php
$id_employee = $_POST[id_employee];
$first_name = $_POST[first_name];
$last_name = $_POST[last_name];
$department_id = $_POST[department_id];
$position = $_POST[position];
$password_id = $_POST[password_id];
$type_user = $_POST[type_user];
if ($type_user == "1") {
    $type_user1 = "admin";
    $file_menu = "menu_admin.php";
} else {
    $type_user1 = "user";
    $file_menu = "menu_user.php";
};
include 'connect/dbconnect.php';
$addon = "INSERT INTO employee (  id_employee, first_name, last_name, department_id, position, password_id, type_user,file_menu)
          VALUES ('" . $id_employee . "','" . $first_name . "','" . $last_name . "','" . $department_id . "','" . $position . "','" . $password_id . "','" . $type_user1 . "','" . $file_menu . "') ";
$result = mssql_query($addon)or die('Error querying MSSQL database');
if ($result) { ?>
<script>alert('เพิ่มพนักงานสำเร็จ')</script>
<?php
    echo" <meta http-equiv = 'refresh' content='0; url=main.php?page=add_user'>";
}
?>

