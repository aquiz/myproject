<!DOCTYPE html>

<header>
<title>tmsHome</title>
<link rel="stylesheet" href="CSS1.css"/>
</header>

<body>
<body bgcolor="grey">

     <div id="WebBody">
	       <div id="header">
		   <center><h1>TRANSPORT SYSTEM</h1></center>
		   <center><h2>Welcome to the Transport Management System(TMS) site.</h2></center>
		         <div id="headernav">
				      <nav>
					     <ul>
						     <li><a href = >Link One  </a></li>
						     <li><a href = >Link two  </a></li>
							 
						 </ul>
					  
					  </nav>
				 
				 </div>
		         
		   </div>
		   
		   <div id="leftnavs">
	<table>
  <tr>
    <td><li><a href="tmsHOME.html">home</a></li></td>
    </tr>

    
    <td><li><a href="addagent.php">add agent</a></li></td>
  </tr>
  <tr>
    
    <td><li><a href="addbus.php">buses</a></li></td>
  </tr>
  <tr>
    <td><li><a href="route.php">routes</a></li></td>
</tr>

<tr>
    <td><li><a href="printreport.php">Print report</a></li></td><br>
</tr>
<tr>
    <td><li><a href="logout.php">logout</a></li></td>
</tr>
</table>        
		   </div>
		   
		   <div id="inbody">
		
   <?php

$routeID=@$_POST['routeID'];
$distance=@$_POST['distance'];
$fare=@$_POST['fare'];
$source=@$_POST['source'];
$destination=@$_POST['destination'];
$via_road=@$_POST['via_road'];
#the @ disable PHP error reporting
include 'conn.php';
if(!empty($routeID)){
$routeID=addslashes($routeID);
$distance=addslashes($distance);
$fare=addslashes($fare);
$source=addslashes($source);
$destination=addslashes($destination);
$via_road=addslashes($via_road);

$sql="INSERT INTO route SET routeID='$via_road',distance='$distance',fare='$fare',
source='$source',destination='$destination',via_road='$via_road'";
$query=mysql_query($sql)or die("Cannot query the database.<br>".mysql_error());
echo "route added!!";
}else{
?>
<title>Add route</title>


<form name="routeID" method="post" action="route.php">
<br>
RouteID:<input type="text" name="routeID">
<br>
<br>
DISTANCE:<input type="text" name="distance">
<br>
<br>
FARE:<input type="text" name="fare">
<br>
<br>
SOURCE:<input type="text" name="source">
<br>
<br>
DESTINATION:<input type="text" name="destination">
<br>
<br>
VIA_ROAD:<input type="text" name="via_road">
<br>

<br>
<input type="Submit" name="Submit" value="Submit">
</form>
<?php
}

?>

		   
	       </div>
		   
		   <div id="footer">
	       All Rights Reserved 2014
			
			
			</div>
	 
	 </div>

</body>
