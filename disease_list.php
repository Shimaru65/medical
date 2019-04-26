<html>
    <head>   
        <meta charset="windows-874">
    </head>
    <body>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>เพิ่มรายการการตรวจโรค</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="add_disease_list_code.php" method="POST"  enctype='multipart/form-data' class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <div class="input-group">
                                        <input type="text" id="disease_list_name" name="disease_list_name" required placeholder="รายการตรวจโรค"  class="form-control">
                                        <div class="input-group-btn"><button class="btn btn-primary">ยืนยัน</button></div>
                                    </div>
                                </div>
                            </div>                        
                        </form>
                    </div>                  
                </div>
            </div>            

            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">รายการการตรวจโรค</strong>
                    </div>

                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%">อันดับ</th>
                                    <th width="80%">ข้อมูล</th>
                                    <td widh="10%">เพิ่ม</td>
                                    <th>ลบ</th> 
                                </tr>
                            </thead> 
                            <tbody>
                                <?php
                                include 'connect/dbconnect.php';
                                $showhos = "select * from disease_list";
                                $result = mssql_query($showhos);
                                $i = 0;
                                while ($record = mssql_fetch_array($result)) {
                                    ?>
                                    <tr><td><?php echo ++$i; ?></td>
                                        <td>
                                            <?php
                                            echo"$record[disease_list_name]</a>";
                                            ?>
                                        </td>  
                                        <td><?php echo"<a href=main.php?page=disease_detail&disease_id=$record[disease_id]&disease_list_name=$record[disease_list_name]>เเก้ใข" ?></a></td>
                                        <td><?php echo"<a href=delete_disease_list_code.php?disease_id=$record[disease_id]>ลบ" ?></a></td>
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

</body>
</html>