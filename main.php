<?php
session_start();
?>
<html>
    <head>
        <meta charset="windows-874">
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