<?php

$db_host = "tp038611ddac-mysqldbserver.mysql.database.azure.com";
$db_username = "tp038611ddac@tp038611ddac-mysqldbserver";
$db_pass = "Abc123456";
$db_name = "ddac";

$dbc = @mysqli_connect("$db_host", "$db_username", "$db_pass", $db_name) or die ("Could not connect to MySQL");

?>
