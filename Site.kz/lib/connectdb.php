<?php

$host = "localhost";
$user = "root";
$pass = "";
$name = "ernarservice";

mysql_connect("$host","$user","$pass") or die(mysql_error());
mysql_select_db("$name") or die(mysql_error());
mysql_query("set names utf8");
?>