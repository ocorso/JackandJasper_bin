<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_jackandjasper = "97.74.149.116";
$database_jackandjasper = "jackandjasper";
$username_jackandjasper = "jackandjasper";
$password_jackandjasper = "Vamp5near";
$jackandjasper = mysql_pconnect($hostname_jackandjasper, $username_jackandjasper, $password_jackandjasper) or trigger_error(mysql_error(),E_USER_ERROR); 
?>