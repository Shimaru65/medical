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
                                <th>รหัสพนักงาน</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>รหัสแผนก</th>
                                <th>ตำเเหน่ง</th>
                                <th>ประเภทผู้ใช้งาน</th>
                                <th>เเก้ไข</th>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'connect/dbconnect.php';
                                    $i = 1;
                                    $showemployee = "SELECT * FROM employee";
                                    $showem = mssql_query($showemployee);
                                    while ($employee = mssql_fetch_array($showem)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $employee[id_employee] ?></td>
                                            <td><?php echo $employee[first_name], $employee[last_name] ?></td>
                                            <td><?php echo $employee[department_id] ?></td>
                                            <td><?php echo $employee[position] ?></td>
                                            <td><?php echo $employee[type_user] ?></td> 
                                            <td><a href="main.php?page=edit_user&id_employee=<?php echo $employee[id_employee] ?>">เเก้ไข</a></td>
                                        </tr> 
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
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