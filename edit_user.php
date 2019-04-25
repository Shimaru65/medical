<html>
    <head>
        <meta charset="windows-874">
    </head>
    <body>
        <form action="edit_user_code.php?id_employee=<?php echo $_GET[id_employee] ?>" name="formedit" method="POST">
            <div class="mt-3">
                <div class="row">
                    <div class="col-md-10"> 
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <table>
                                        <thead>
                                        <th>รหัสพนักงาน</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>รหัสแผนก</th>
                                        <th>ตำเเหน่ง</th>
                                        <th>ประเภทผู้ใช้งาน</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                include 'connect/dbconnect.php';
                                                $showemployee = "SELECT * FROM employee WHERE id_employee=$_GET[id_employee]";
                                                $showem = mssql_query($showemployee);
                                                while ($employee = mssql_fetch_array($showem)) {
                                                    ?>
                                                    <td>
                                                        <div class="col-12"><input type="text" id="id_employee" name="id_employee" value="<?php echo $employee[id_employee] ?>" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-12"><input type="text" id="first_name" name="first_name" value="<?php echo $employee[first_name] ?>" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-12"><input type="text" id="last_name" name="last_name" value="<?php echo $employee[last_name] ?>" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-12"><input type="text" id="department_id" name="department_id" value="<?php echo $employee[department_id] ?>" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" id="position" name="position" placeholder="<?php echo $employee[position] ?>" class="form-control">
                                                    </td>
                                                    <td><select name="type_user" id="type_user" class="form-control">
                                                            <option value="0"disabled>โปรดเลือก</option>
                                                            <option value="admin">admin</option>
                                                            <option value="user">user</option>
                                                        </select>
                                                    </td>
                                                    <?php
                                                }
                                                ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">ยืนยันการเปลี่ยนแปลง</button>
                                </div>
                            </div>   
                        </div>   
                    </div>  
                </div>  
        </form>
    </body>
</html>
