<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_BusMaster = "localhost";
$database_BusMaster = "busmaster";
$username_BusMaster = "root";
$password_BusMaster = "";
$BusMaster = mysql_pconnect($hostname_BusMaster, $username_BusMaster, $password_BusMaster) or trigger_error(mysql_error(),E_USER_ERROR); 
?>