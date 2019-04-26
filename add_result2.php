<html>
    <head>
        <meta charset="windows-874">       
    </head>
    <body>
        <form action="add_result_code.php" method="POST" name="input">
            <?php
            $employee_id = $_POST[id_employee];
            $disease_list = $_POST[select_disease_list];
            $i = 0;
            $j = 0;
            include 'connect/dbconnect.php';
            $check = "select * from employee  where id_employee = $employee_id";
            $result = mssql_query($check) or die(mssql_error());
            $num = mssql_num_rows($result);
            if ($num == 0) {
                echo "<script>";
                echo "alert('ไม่มีสมาชิกนี้ในฐานข้อมูล !');";
                echo "window.location='main.php?page=add_result';";
                echo "</script>";
            } else {
                $showemployee = "SELECT * FROM employee WHERE id_employee=$employee_id";
                $showdetailtable = "SELECT * FROM disease_detail WHERE disease_id=$disease_list";
                $showem = mssql_query($showemployee);
                $showdi = mssql_query($showdetailtable);
                while ($employee = mssql_fetch_array($showem)) {
                    ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <strong>ข้อมูลพนักงาน</strong>
                                </div>         
                                <div class="card-body">
                                    <div class="form-group">
                                        <table>
                                            <tr>
                                                <td><p>รหัสพนักงาน :<?php echo $employee[id_employee] ?></p></td>
                                            </tr>
                                            <tr>
                                                <td><p>ชื่อ :<?php echo $employee[first_name], $employee[last_name] ?></p></td>
                                            </tr>
                                            <tr>
                                                <td><p>แผนก :<?php echo $employee[department_id] ?></p></td>
                                            </tr>
                                            <tr>
                                                <td><p>ตำเเหน่ง :<?php echo $employee[position] ?></p></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <input type="hidden" name="pass_employee" value="<?php echo $employee_id ?>">
                    <input type="hidden" name="pass_disease_id" value="<?php echo $disease_list ?>">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">
                                <strong>ตารางรายละเอียด</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <table class="table-bordered">
                                        <thead>
                                            <tr>
                                                <?php
                                                while ($disease = mssql_fetch_array($showdi)) {
                                                    ?>
                                                    <th>
                                                        <?php
                                                        echo $disease[detail_name];
                                                        $detail[$i] = "$disease[detail_id]";
                                                        ?>
                                                    </th>
                                                    <?php
                                                    $i++;
                                                }
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php while ($j < $i) { ?>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="usr" name="txtinput<?php echo $j ?>">
                                                        </div>                               
                                                    </td>  
                                                    <?php
                                                    $j++;
                                                }
                                                ?>                                   
                                        <input type="hidden" name="pass_loop" value="<?php echo $j ?>">
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <strong>เลือกโรงพยาบาล</strong>
                            </div>
                            <div class="card-body">
                                <select name="select_hospital">
                                    <option value=""selected disabled>โปรดเลือก</option>
                                    <?php
                                    include 'connect/dbconnect.php';
                                    $showhos = "select * from hospital";
                                    $result = mssql_query($showhos);

                                    while ($record = mssql_fetch_array($result)) {
                                        ?>                   
                                        <option value="<?php echo $record[hospital_id] ?>"><?php echo $record[hospital_name] ?></option>                   
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <strong>เพิ่มวันที่ทำการตรวจ</strong>
                        </div>                   
                        <div class="card-body">
                            <input type="date" name="date" value="" />
                        </div>
                    </div>
                    <input type="submit" value="submlt" />
                </div>
            </form>
            <?php
        }
        ?>
    </body>
</html>