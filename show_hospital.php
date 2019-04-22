<html>
    <head>   
        <meta charset="windows-874">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>result</title>
        <meta name="description" content="admin_main_page">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/assets/css/normalize.css">
        <link rel="stylesheet" href="css/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/assets/css/themify-icons.css">
        <link rel="stylesheet" href="css/assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="css/assets/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="css/assets/scss/style.css">
        <link href="css/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
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
                                $showhos1 = "select * from hospital WHERE hospital_id=$_GET[hospital_id]";
                                $disease = "select * from disease_list";
                                $result_table = "select * from result";
                                $result1 = mssql_query($showhos1);
                                $result2 = mssql_query($disease);
                                $result3 = mssql_query($result_table);
                                $record = mssql_fetch_array($result1);
                                $record2 = mssql_fetch_array($result2);
                                $record3 = mssql_fetch_array($result3);
                                ?> 
                                <strong class="card-title"><?php echo "$record[hospital_name]" ?></strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead> 
                                    <td align="center" name="id"><b>ชื่อโรงพยาบาล</b></td>
                                    <td align="center" name="no"><b>รายการการตวจโรค</b></td>
                                    <td align="center" name="thick"><b>สรุปผลการตรวจ</b></td>
                                    <td align="center" name="thick"><b>หมายเหตุ</b></td>   
                                    </thead>
                                    <td align="center"><?= $record["hospital_name"]; ?></td>
                                    <td align="center"><?= $record2["disease_list_name"]; ?></td>
                                    <td align="center"><?= $record3["result"]; ?></td>
                                    <td align="center"><?= $record3["note"]; ?></td>
                                </table>
                                </body>
                                </html>