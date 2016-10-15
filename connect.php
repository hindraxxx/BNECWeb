<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connect = "localhost";
$database_connect = "k5442245_bnec";
$username_connect = "k5442245_edison";
$password_connect = "Sarangheyo5293";
$connect=mysql_connect($hostname_connect, $username_connect, $password_connect) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database_connect) or die(mysql_error());
?>