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

//$routeID=@$_POST['routeID'];
$distance=@$_POST['distance'];
$fare=@$_POST['fare'];
$source=@$_POST['source'];
$destination=@$_POST['destination'];
$via=@$_POST['via'];
#the @ disable PHP error reporting
include 'conn.php';
if(!empty($source)){
//$routeID=addslashes($routeID);
$distance=addslashes($distance);
$fare=addslashes($fare);
$source=addslashes($source);
$destination=addslashes($destination);
$via=addslashes($via);

$sql="INSERT INTO route SET routeID='$routeID', distance='$distance', fare='$fare',
source='$source',destination='$destination',via='$via'";
$query=mysql_query($sql)or die("Cannot query the database.<br>".mysql_error());
echo "route added!!";
}else{
?>
<title>Add route</title>


<form name="routeID" method="post" action="route.php">
<br>
source:<input type="text" name="source">
<br>
<br>
destination:<input type="text" name="destination">
<br>
<br>
distance(km):<input type="float" name="distance">
<br>
<br>
via(road):<input type="text" name="via">
<br>
<br>
fare:<input type="text" name="fare">
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
