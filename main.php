<?php
session_start();
?>
<html>
    <head>
        <meta  charset="utf-8">
    </head>
    <body>
        <table width="100%" border="1">
            <tr>
                <td width="17%">    
                    <?php
                    print iconv('WINDOWS-874', 'UTF-8', $MartList->fields ["hostpital_name"]);
                    include $_SESSION["file_menu"];
                    ?>
                </td>
                     <td width="73%" align="middle">
                     <?php
                    include $_GET[page].".php";
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>