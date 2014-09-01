<?php
include "../conn/conn.php"; 
  
$del= $_GET['sd_id'];
//query to delete
if((mysql_query("DELETE FROM stations WHERE sd_id = '$del'"))==true) {

header("location:sodetable.php");

}


?>
