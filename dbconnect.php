<?php
$host="CHANTAMART\SQLEXPRESS";
$username="sa";
$password="euro1234";
$dbname="medical";
$Conn=mssql_connect($host,$username,$password);
$selected = mssql_select_db($dbname,$Conn);
if( !mssql_select_db ) {
    echo "<script>alert('disconnect database !');history.back();</script>";
} 
?>