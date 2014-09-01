<!DOCTYPE html>
<header>
	<?php include("../conn/member.php"); ?>
</header>
<html >
<head>
<title>Administrators_List</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../../style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->
<style>

.sidebarthis{
text-indent: 6px;

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

  <h2>Agents</h2>
<a href="addstaff.php">
  <button type="button" class="btn btn-primary btn-lg">Add New Staff</button>
</a>

<a href="viewagent.php">
  <button type="button" class="btn btn-primary btn-lg">view Agents</button>
</a>
<a href="viewadmin.php">
  <button type="button" class="btn btn-primary btn-lg">view Admins</button>
</a>
<a href="stafflist.php">
  <button type="button" class="btn btn-primary btn-lg">view Staffs</button>
</a>

<?php	
require_once("../conn/conn.php");
$query = "SELECT * FROM staff where position='agent'"; 
$result = mysql_query($query);


echo "<table class='table table-bordered table-hover table-my'>"; // start a table tag in the HTML


echo"<tr>

<th>STAFF-ID</th>
<th>FIRSTNAME</th>
<th>LASTNAME</th>
<th>LOCATION</th>
<th>PHONE NUMBER</th>
<th>EMAIL</th>
<th>POSITION</th>
<th>EDIT</th>
<th>DELETE</th>
</tr>";

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
	



echo "<tr><td>" . $row['staffID'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['location'] . "</td><td>" . $row['phonenumber'] . "<td>" . $row['email'] . "</td><td>" . $row['position'] . "</td><td><a href=\"EditAgent.php?staffID=$row[staffID]\">Edit</a></td><td><a href=\"DeleteAgent.php?staffID=$row[staffID]\"><img src='../image/index.jpeg'  height='20' width='20'/></a></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

 //Make sure to close out the database connection
	
	
		
		
mysql_close();
?>
</div>
			
      </div>
	  
			
      
     <?php include("../../sidebar.php"); ?>
 <?php include("../../footer.php"); ?>  
