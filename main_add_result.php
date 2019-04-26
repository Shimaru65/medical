<html>
    <head>
        <meta charset="windows-874">
    </head>
    <body>
        <div class="mt-3">
            <div class="col-md-12">              
                <div class="card">
                    <div class="card-header">
                        <strong>
                            รายชื่อพนักงานทั้งหมด
                        </strong>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">

                                <thead>
                                <th>อันดับ</th>
                                <th>วัน/เดือน/ปี</th>
                                <th>รหัสพนักงาน</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>แผนก</th>
                                <th>รายการการตรวจโรค</th>
                                <th>โรงพยาบาล</th>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'connect/dbconnect.php';
                                    $i = 1;
                                    $showresult = "SELECT        dbo.check_result.*, dbo.employee.first_name, dbo.employee.last_name, dbo.disease_list.disease_list_name, dbo.department.department_name, dbo.hospital.hospital_name
FROM            dbo.check_result INNER JOIN
                         dbo.employee ON dbo.check_result.id_employee = dbo.employee.id_employee INNER JOIN
                         dbo.disease_list ON dbo.check_result.disease_id = dbo.disease_list.disease_id INNER JOIN
                         dbo.department ON dbo.employee.department_id = dbo.department.department_id INNER JOIN
                         dbo.hospital ON dbo.check_result.hospital_id = dbo.hospital.hospital_id";
                                    $showem = mssql_query($showresult);
                                    while ($result = mssql_fetch_array($showem)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo "$result[day]/$result[month]/$result[year]" ?></td>
                                            <td><?php echo $result[id_employee] ?></td>
                                            <td><?php echo "$result[first_name]  $result[last_name] " ?></td>
                                            <td><a href="main.php?page=add_department"><?php echo $result[department_name] ?></a></td>
                                            <td><?php echo $result[disease_list_name] ?></td>
                                            <td><?php echo $result[hospital_name] ?></td> 
                                        </tr> 
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <a href="main.php?page=add_result">LINK</a>
                        </div>
                    </div>                   
                </div>               
            </div>
            <script src="css/assets/js/lib/data-table/datatables.min.js"></script>
            <script src="css/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
            <script src="css/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
            <script src="css/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
            <script src="css/assets/js/lib/data-table/jszip.min.js"></script>
            <script src="css/assets/js/lib/data-table/pdfmake.min.js"></script>
            <script src="css/assets/js/lib/data-table/vfs_fonts.js"></script>
            <script src="css/assets/js/lib/data-table/buttons.html5.min.js"></script>
            <script src="css/assets/js/lib/data-table/buttons.print.min.js"></script>
            <script src="css/assets/js/lib/data-table/buttons.colVis.min.js"></script>
            <script src="css/assets/js/lib/data-table/datatables-init.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#bootstrap-data-table-export').DataTable();
                });
            </script> 
        </div>
    </body>
</html>