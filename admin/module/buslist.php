<!DOCTYPE html>
<!DOCTYPE html>
<header>
	<?php include("../conn/member.php"); ?>
</header>
<html >
<head>
<title>BUS LIST</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../../style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->

<style>

.sidebarthis{
text-indent: 100px;
}

td{
text-align:left;
}

table{
width:500%;
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
 
 <h2>List of Buses</h2>
 


<a href="addbus.php">
  <button type="button" class="btn btn-primary btn-lg">Add New Bus</button>
</a>
<?php	


require_once("../conn/conn.php");
$query = "SELECT * FROM bus"; 
$result = mysql_query($query);

echo"<table class='table table-bordered table-my table-hover sidebarthis'>"; // start a table tag in the HTML


echo"<br><tr>

<th>BUS_ID</th>
<th>SEATS</th>
<th>MODEL</th>
<th>EDIT </th>
<th>DELETE </th>
</tr>";

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results


echo "<tr><td>".$row['busID']."</td><td>".$row['seats']."</td><td>" . $row['model']."</td><td> <a href='EditBus.php?busID=$row[busID]'><img src='image/images.jpeg'  height='20' width='20'/></a> </td><td> <a href='DeleteBus.php?busID=$row[busID]' onclick='return Del()' ><img src='image/index.jpeg'  height='20' width='20'/></a><br></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

 //Make sure to close out the database connection
			
mysql_close();
?>


<?php include("ConfirmDelete.php") ?>
 
 
	
		  </div>
			
      </div>
 
   <?php include("../../sidebar.php"); ?>
 <?php include("../../footer.php"); ?>
