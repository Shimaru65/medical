<html>
    <head>
        <meta charset="windows-874">      
    </head>
    <body>
        <form action="main.php?page=add_result2" method="POST" name="formemployee">
            <div class="mt-3">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <p>เลือกพนักงาน</p>
                            </div>
                            <div class="card-body">
                                <select name="select_employee">
                                    <option value=""selected disabled>โปรดเลือก</option>
                                    <?php
                                    include 'connect/dbconnect.php';
                                    $showhos = "select * from employee";
                                    $result = mssql_query($showhos);

                                    while ($record = mssql_fetch_array($result)) {
                                        ?>                   
                                        <option value="<?php echo $record[id_employee] ?>"><?php echo $record[id_employee] ?></option>                   
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="card-header">
                                <p>เลือกรายการการตรวจสุขภาพ</p>
                            </div>
                            <div class="card-body">
                                <select name="select_disease_list">
                                    <option value=""selected disabled>โปรดเลือก</option>
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
                                <input type="submit" value="submit" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>