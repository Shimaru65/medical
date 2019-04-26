<html>
    <head>
        <meta charset="windows-874">      
    </head>
    <body>
        <form action="main.php?page=add_result2" method="POST" name="formemployee">
            <div class="mt-3">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header">
                                <strong>เลือกพนักงาน</strong>
                            </div>
                            <div class="card-body">
                                <input type="text" id="id_employee" name="id_employee" required placeholder="รหัสพนักงาน *"  class="form-control">
                            </div>
                            <div class="card-header">
                                <strong>เลือกรายการการตรวจสุขภาพ</strong>
                            </div>
                            <div class="card-body">
                                <select name="select_disease_list" required>
                                    <option value=""selected disabled>โปรดเลือก *</option>
                                    <?php
                                    include 'connect/dbconnect.php';
                                    $showhos = "select * from disease_list";
                                    $result = mssql_query($showhos);

                                    while ($record = mssql_fetch_array($result)) {
                                        ?>                   
                                        <option value="<?php echo $record[disease_id] ?>"><?php echo $record[disease_list_name] ?></option>                   
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="card-footer">
                                <input type="submit" value="submit" class="btn btn-primary btn-lg btn-block" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>