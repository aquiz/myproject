<!DOCTYPE html>

<html >
<head>
<title>VIA table</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../../style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->

<style>

.sidebarthis{
text-indent: 150px;
}

td{
text-align:left;
}

table{

}
</style>


</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="index.html"><center> TRANSPORT SYSTEM </center> </a></h1></div>
      <div class="menu_nav">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Support</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">Contact Us</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>



  <div class="content img">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
 
 <h2>List of Via Stations</h2>
 


<a href="addroute.php">
  <button type="button" class="btn btn-primary btn-lg">Add New Route</button>
</a>
<a href="newsode.php">
  <button type="button" class="btn btn-primary btn-lg">Add Source/Destination</button>
</a>
<a href="newvia.php">
  <button type="button" class="btn btn-primary btn-lg">Add Via_Station</button>
</a>
<?php	


require_once("../conn/conn.php");

$query = "SELECT * FROM via_stations"; 
$result = mysql_query($query);

echo "<table class='table table-bordered table-mystyle sidebarthis'>"; // start a table tag in the HTML


echo"<tr>

<th>VIA_STATIONS</th>
<th>EDIT</th>
<th>DELETE</th>

</tr>";

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
	
echo "<tr><td>" . $row['via_stations'] . "</td><td><a href='newvia.php'><img src='image/images.jpeg'  height='20' width='20'/></a></td><td><a href='DeleteVia.php?via_stationid=$row[via_stationid]' onclick='return Del()' ><img src='../image/index.jpeg'  height='20' width='20'/></a></td></tr>";  //$row['index'] the index here is a field name

}

echo"</table>";

?>

<?php include("ConfirmDelete.php"); ?>
 

		  </div>
			
      </div>
    			
   <?php include("../../sidebar.php"); ?>
 <?php include("../../footer.php"); ?>  
