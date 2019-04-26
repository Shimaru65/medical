<html>
    <head>
        <meta charset="windows-874">
    </head>
    <body>
        <form action="add_department_code.php" method="POST" name="form1">
            <div class="mt3">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">
                                <strong>เพิ่มเเผนก</strong>
                            </div>
                            <div class="card-body">
                                <div class="col col-md-12">
                                    <div class="input-group">
                                        <input type="text" id="department_id" name="department_id" required placeholder="รหัสแผนก"  class="form-control">
                                        <input type="text" id="department_name" name="department_name" required placeholder="ชื่อแผนก"  class="form-control">
                                        <div class="input-group-btn"><button class="btn btn-primary">ยืนยัน</button></div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="content mt-3">
                        <div class="animated fadeIn">                   
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">รายชื่อแผนก</strong>
                                    </div>
                                    <div class="card-body">
                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>รหัสแผนก</th>                       
                                                    <th>ชื่อแผนก</th> 
                                                    <th>ลบ</th>
                                                </tr>
                                            </thead> 
                                            <tbody>
                                                <?php
                                                include 'connect/dbconnect.php';
                                                $showdepartment = "select * from department";
                                                $result = mssql_query($showdepartment);
                                                while ($record = mssql_fetch_array($result)) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                            echo" $record[department_id]";
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo" $record[department_name]";
                                                            ?>
                                                        </td>      
                                                        <td><?php echo"<a href=delete_department_code.php?department_id=$record[department_id]>ลบ" ?></a></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>                  
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>