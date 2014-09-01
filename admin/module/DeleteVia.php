<?php
include "../conn/conn.php"; 
  
$del= $_GET['via_stationid'];
//query to delete
if((mysql_query("DELETE FROM via_stations WHERE via_stationid = '$del'"))==true) {
header("location:viatable.php");
}


?>
