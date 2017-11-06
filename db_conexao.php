<?php
$host = "localhost";
$db   = "juligo_gladius";
$user = "juligo_dreaper";
$pass = "bdGAD321";

$con = mysql_pconnect($host, $user, $pass) or die ("Não foi possível CONECTAR com o BD"); 
mysql_select_db($db, $con) or die ("Não foi possível SELECIONAR o banco");;

?>