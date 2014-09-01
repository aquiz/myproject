<?php
include "../conn/conn.php"; 
  
$del= $_GET['busID'];
//query to delete
if((mysql_query("DELETE FROM bus where busID = '$del'"))==true) {
header("location:buslist.php");
}


?>
