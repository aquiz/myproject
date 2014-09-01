<?php
include "../conn/conn.php"; 
  
$del= $_GET['staffID'];
//query to delete
if((mysql_query("DELETE FROM staff where staffID = '$del'"))==true){ 
header("location:stafflist.php");
 }
else{
header("location: stafflist.php");
}



?>
