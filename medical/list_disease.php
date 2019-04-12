<html>
    <head>
       <meta charset="UTF-8"> 
    </head>
    <body>
    <center>ข้อมูลการตรวจโรค<br> 
    <table border=1 cellspacing=0 width=80%>
        <tr>
<?php
    include 'connect/dbconnect.php';
    $showdisease = "select *from disease_detail where disease_id=$_GET[id]";
    $result = mssql_query($showdisease);
    while ($record = mssql_fetch_array($result)){
    ?><td width="10%">
            <?php
        echo "$record[list_name]";
        ?></td>
    <?php }?>
            <tr>
    </table>
    </center>
    </body>     
</html>