<?php
session_start();
?>
<html>
    <head>
        <meta charset="windows-874">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">     
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
        <div class="row">
            <div class="col-md-3">    
                <?php
                include $_SESSION["file_menu"];
                ?>
            </div>
            <div class="col-md-9">
                <?php
                include $_GET[page] . ".php";
                ?>
            </div>
        </div>
    </body>
</html>