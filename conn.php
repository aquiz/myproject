<?php
$host="localhost";
$db="transport_system";

$user="root";
$pass="";

$link=mysql_connect($host,$user,$pass) or die("could not connect");
mysql_select_db($db,$link) or die("could not connect, do you have a database?");


