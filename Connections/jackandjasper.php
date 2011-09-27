<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
 include_once("../php/cxn.inc");
$database_jackandjasper	= $dbname;
$jackandjasper 			= mysql_pconnect($host, $user, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
?>