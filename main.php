<?php
session_start();
?>
<html>
    <head>
        <meta charset="windows-874">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="user_main_page">
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
        <table width="100%" border="1">
            <tr>
                <td width="17%">    
                    <?php
                    include $_SESSION["file_menu"];
                    ?>
                </td>
                <td width="73%" align="middle">
                    <?php
                    include $_GET[page] . ".php";
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>