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

$firstname=@$_POST['firstname'];
$lastname=@$_POST['lastname'];
$location=@$_POST['location'];
$email=@$_POST['email'];
$agentID=@$_POST['agentID'];
#the @ disable PHP error reporting
include 'conn.php';
if(!empty($firstname)){
$firstname=addslashes($firstname);
$lastname=addslashes($lastname);
$location=addslashes($location);
$email=addslashes($email);
$agentID=addslashes($agentID);

$sql="INSERT INTO agent SET firstname='$firstname',lastName='$lastname',location='$location',
email='$email',agentID='$agentID'";
$query=mysql_query($sql)or die("Cannot query the database.<br>".mysql_error());
echo "agent added!!";
}else{
?>
<title>Add agent</title>


<form name="agentID" method="post" action="addagent.php">
<br>
FirstName:<input type="text" name="firstname">
<br>
<br>
LastName:<input type="text" name="lastname">
<br>
<br>
Location:<input type="text" name="location">
<br>
<br>
Email:<input type="text" name="email">
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
