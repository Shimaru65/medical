<html>
    <head>   
        <meta charset="windows-874">
    </head>
    <?php include 'connect/dbconnect.php'; ?>
    <body>
        <?php
        $employee = $_GET[id_employee];
        ?>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <?PHP
                        $year = "select year from check_result where id_employee=$employee and disease_id=$_GET[disease_id]";
                        $year_ql = mssql_query($year);
                        while ($record = mssql_fetch_array($year_ql)) {
                            ?>
                            <table width="100%" border="1">
                                <tr>
                                    <?php
                                    $disease_name = "SELECT * FROM disease_list WHERE disease_id=$_GET[disease_id]";
                                    $disease_name2 = mssql_query($disease_name);
                                    while ($disease_name3 = mssql_fetch_array($disease_name2)) {
                                        ?>
                                        <td width="100%"><?php echo $disease_name3[disease_list_name] . " Ле" . $record[year] ?></td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%" border="1">
                                            <tr>
                                                <?php
                                                $detail = "select * from disease_detail where disease_id=$_GET[disease_id]";
                                                $result = mssql_query($detail);
                                                while ($record1 = mssql_fetch_array($result)) {
                                                    ?>
                                                    <th><?php echo "$record1[detail_name]" ?></th>
                                                    <?php
                                                }
                                                ?>
                                            </tr>
                                            <tr>
                                                <?php
                                                $result_table = "select * from result where disease_id=$_GET[disease_id] and id_employee=$employee and year=$record[year]";
                                                $result1 = mssql_query($result_table);
                                                while ($record2 = mssql_fetch_array($result1)) {
                                                    ?>
                                                    <td><?php echo "$record2[result]" ?></td>
                                                    <?php
                                                }
                                                ?>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            &nbsp;
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


