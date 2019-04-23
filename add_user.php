<html>
    <head>   
        <meta charset="windows-874">
    </head>
    <body>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>เพิ่มพนักงาน</strong> 
                </div>
                <div class="card-body card-block">
                    <form action="add_user_code" method="POST" enctype="multipart/form-data" class="form-horizontal">                
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">รหัสพนักงาน</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="id_employee" name="id_employee" placeholder="รหัสพนักงาน" class="form-control"><small class="form-text text-muted">00000</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">ชื่อ-นามสกุล</label></div>
                            <div class="col-12 col-md-4"><input type="text" id="first_name" name="first_name" placeholder="ชื่อ" class="form-control"><small class="help-block form-text">สมศักดิ์</small></div>
                            <div class="col-12 col-md-4"><input type="text" id="last_name" name="last_name" placeholder="นามสกุล" class="form-control"><small class="help-block form-text">ใจดี</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">แผนก</label></div>
                            <div class="col-12 col-md-9">
                                <select name="department_id" id="department_id" class="form-control">
                                    <option value="0">โปรดเลือก</option>
                                    <?php
                                    include 'connect/dbconnect.php';
                                    $showdetail = "select * from department";
                                    $result = mssql_query($showdetail);
                                    while ($record = mssql_fetch_array($result)) {
                                        ?>                                                      
                                        <option value="<?php echo $record[department_id] ?>"><?php echo "$record[department_name]" ?></option>                             
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>     
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="position" class=" form-control-label">ตำเเหน่ง</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="position" name="position" placeholder="ตำเเหน่ง" class="form-control"><small class="help-block form-text">ช่างประจำเครื่อง</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password_id" name="password_id" placeholder="Password" class="form-control"><small class="help-block form-text">123456  </small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">ประเภทผู้ใช้</label></div>
                            <div class="col-12 col-md-9">
                                <select name="type_user" id="type_user" class="form-control">
                                    <option value="0">โปรดเลือก</option>
                                    <option value="1">admin</option>  
                                    <option value="2">user</option>  
                                </select>
                            </div>   
                        </div>             
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>                          
                        </div>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>