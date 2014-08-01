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
    
    <td><li><a href="bus.php">buses</a></li></td>
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
   
$busID=@$_POST['busID'];
$model=@$_POST['model'];
$seats=@$_POST['seats'];
$fare=@$_POST['fare'];

#the @ disable PHP error reporting
include 'conn.php';
if(!empty($busID)){
$seats=addslashes($seats);
$model=addslashes($model);
$fare=addslashes($fare);
$busID=addslashes($busID);

$sql="INSERT INTO bus SET busID='$busID', seats='$seats', model='$model', fare='$fare'";
$query=mysql_query($sql)or die("Cannot query the database.<br>".mysql_error());
echo "bus added!!";
}else{
?>
<title>Add bus</title>


<form name="busID" method="post" action="addbus.php">
<br>
busID:<input type="text" name="busID">
<br>
<br>
seats:<input type="tinyint" name="seats">
<br>
<br>
model:<input type="text" name="model">
<br>
<br>
fare:<input type="int" name="fare">
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
