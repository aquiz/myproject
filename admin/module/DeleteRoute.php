<?php
include "../conn/conn.php"; 
  
$del= $_GET['routeID'];
//query to delete
if((mysql_query("DELETE FROM route where routeID = '$del'"))==true){ 
header("location:routelist.php");
}

else{
header("location: routelist.php");
}






?>
