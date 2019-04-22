<html>
    <head>   
        <meta charset="windows-874">
    </head>
    <body>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>เพิ่มโรค</strong>
                </div>
                <div class="card-body card-block">
                    <form action="add_disease.php" method="POST"  enctype='multipart/form-data' class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <input type="text" id="hostpital_name" name="disease_name" placeholder="ชื่อโรค"  class="form-control">
                                    <div class="input-group-btn"><button class="btn btn-primary">ยืนยัน</button></div>
                                </div>
                            </div>
                        </div>                        
                    </form>
                </div>                  
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">รายชื่อโรค</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ชื่อโรค</th>
                                            <th>เเก้ใข</th>
                                            <th>ลบ</th> 
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        <?php
                                        include 'connect/dbconnect.php';
                                        $showdisease = "select * from disease_list";
                                        $result = mssql_query($showdisease);
                                        while ($record = mssql_fetch_array($result)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    echo" $record[disease_name]";
                                                    ?>
                                                </td>
                                                <td>edit</td>
                                                <td><?php echo"<a href=delete_hospital_code.php?hospital_id=$record[disease_id]>ลบ" ?></a></td>
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
    </body>
</html>