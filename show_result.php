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
                                        $showhos = "select * from disease_detail WHERE diseasea_id=$_GET[disease_id]";
                                        $rusult_table = "select * from result";
                                        $result = mssql_query($showhos);
                                        $result3 = mssql_query($rusult_table);
                                        while ($record = mssql_fetch_array($result)) {
                                            while ($record2 = mssql_fetch_array($result3)) {
                                                ?> 
                                            <th>
                                                <?php
                                                echo "$record[detail_name]";
                                                echo "$record2[disease_id]";
                                                ?>
                                            </th>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </thead>
                                </table>
                                </body>
                                </html>