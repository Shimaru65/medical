<meta charset="windows-874">
<?php
$id_employee = $_POST[id_employee];
$first_name = $_POST[first_name];
$last_name = $_POST[last_name];
$department = $_POST[department_id];
$position = $_POST[position];
$type_user = $_POST[type_user];
include 'connect/dbconnect.php';
$dbupdate = "UPDATE employee SET ";
$dbupdate .= "id_employee='" . $id_employee . "'";
$dbupdate .= ",first_name='" . $first_name . "'";
$dbupdate .= ",last_name='" . $last_name . "'";
$dbupdate .= ",department_id='" . $department . "'";
$dbupdate .= ",position='" . $position . "'";
$dbupdate .= ",type_user='" . $type_user . "'";
$dbupdate .= " WHERE id_employee='" . $_GET[id_employee] . "'";
$objQuery .= mssql_query($dbupdate);
if ($objQuery) {
    ?>
    <script>alert('เเก้ไขข้อมูลสำเร็จ')</script>
    <?php
    echo" <meta http-equiv = 'refresh' content='0; url=main.php?page=show_employee'>";
} else {
    echo $objQuery;
    ?>
    
    <?php
    echo" <meta http-equiv = 'refresh' content='10; url=main.php?page=edit_user'>";
}
?>

