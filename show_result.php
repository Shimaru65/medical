<html>
    <head>   
        <meta charset="windows-874">
    </head>
    <body>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">                           
                            <div class="card-header">
                                <?php
                                include 'connect/dbconnect.php';
                                $showhos1 = "select * from disease_list WHERE disease_id=$_GET[disease_id]";
                                $result1 = mssql_query($showhos1);
                                $record = mssql_fetch_array($result1);
                                ?> 
                                <strong class="card-title"><?php echo "$record[disease_list_name]" ?></strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <?php
                                        include 'connect/dbconnect.php';
                                        $showhos = "select * from disease_detail WHERE disease_id=$_GET[disease_id]";
                                        $showre = "select  from employee where id_employee=$_GET[id_employee]";
                                        $rusult_table = "select * from result";
                                        $result = mssql_query($showhos);
                                        $result3 = mssql_query($rusult_table);
                                        while ($record = mssql_fetch_array($result)) {
                                            ?> 
                                        <th>
                                            <?php
                                            echo "$record[detail_name]";
                                            ?>
                                        </th>
                                        <?php
                                    }
                                    ?>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            while ($record1 = mssql_fetch_array($result3)) {
                                                ?>
                                                <td>
                                                    <?php
                                                    echo "$record1[disease_id]";
                                                    ?>
                                                </td>
                                                <?php
                                            }
                                            ?>
                                        </tr>
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