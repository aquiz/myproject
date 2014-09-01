
<?php
session_start();
?>

<head>
<title>ADD STAFF</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../../style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->
<script language="javascript">
<!--
function DisableDrop() {
	document.addstaff.location.disabled = true;
}

function EnableDrop() {
	document.addstaff.location.disabled = false;}

//-->
</script>

<style>

.sidebarthis{
text-indent: 220px;



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
          
          <li><a href="">Contact Us</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>


  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
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

          <h2>Adding New Staff Details</h2>
          	  
<fieldset><legend>Add Member</legend>

<table class='table-mystyle sidebarthis table-bordered'>
<form class="form-horizontal" name="addstaff" role="form" onsubmit="return(validate())" method="post" action="">

<tr><td>
  <div class="form-group">
    <label for="firstname" class="col-sm-13 control-label"><strong>Firstname:</strong></label> </td>
<td><div class="col-sm-15">
      <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
    </div>
  </div>
  </td></tr>
  
 
<tr><td> 
  <div class="form-group">
    <label for="lastname" class="col-sm-13 control-label"><strong>Lastname:</label> </td><td>
    <div class="col-sm-15">
      <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
    </div>
  </div>
    </td></tr>
  
 
<tr><td> 
     <div class="form-group">
    <label for="phonenumber" class="col-sm-13 control-label"><strong>PhoneNumber:</strong></label> </td><td>
   <div class="col-sm-15">
      <input type="text" class="form-control" id="phonenumber" placeholder="Enter phonenumber" name="phonenumber" >
    </div>
    </div>
	  </td></tr>

<tr>
	<td>
	<div class="form-group">
 <label for="position" class="col-sm-13 control-label"><strong>Position:</label>
	</td>
	<td>
<input type="radio" id="position" name="position"onclick="EnableDrop()" value="Agent">Agent 
<input type="radio" id="position" name="position" onclick="DisableDrop()" value="Admin">Admin

	
 
</div>
	</td>
</tr>
    
<?php
require_once('../conn/conn.php');
$query = "SELECT * FROM stations";
$result = mysql_query($query); ?>
<tr>
	<td>
	<div class="form-group">
<label for="location" class="col-sm-13 control-label"><strong>Location:</label>
	</td>
	<td>
<select type="text" class="mystyle" name="location">
<option value=''>--select--</option>
<?php while ($row = mysql_fetch_array($result)) {
 ?>
<option value="<?php echo $row['source_destination'];?>"> <?php echo $row['source_destination'];?> </option>  
 <?php 
} 
?>


<?php
require_once('../conn/conn.php');
 $query = "SELECT * FROM via_stations";
 $result = mysql_query($query); ?>
<?php while ($row = mysql_fetch_array($result)) {
 ?>
<option value="<?php echo $row['via_stations'];?>"> <?php echo $row['via_stations'];?> </option>  
 <?php 
} 
?>
 </select> 
	</td>
	</tr>
</div>
</div>
  
<tr><td><div class="form-group">
    <label for="email" class="col-sm-13 control-label"><strong>Email:</label></td>
    <div class="col-sm-15">
      <td><input type="email" class="form-control" id="email" placeholder="Enter email" name="email" ></td>
    </div>
  </div></tr>
  <tr><td></td><div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
     <td> <button type="submit" name="submit"class="btn btn-default">Submit</button>

      <button type="reset"name="reset"class="btn btn-default">Reset</button>
    </div></td></tr>
  </div>
</form>
</table>
</fieldset>	


<?php
require_once('../conn/conn.php');

if(isset($_POST['submit'])){
//$staffID = $_POST['staffID'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$location = $_POST['location'];
$position = $_POST['position'];
$email = $_POST['email'];
mysql_query("INSERT INTO staff SET staffID = '', firstname='".$firstname."',position='".$position."', lastname='".$lastname."',phonenumber='".$phonenumber."',location='".$location."',email='".$email."' ") or die(mysql_error());
	if($position=='Admin'){
		//takes $salt of the added staff and insert it into the database
		require('../conn/mail_addstaff.php');
		$password = $salt;
		//encrypt $password using md5 hash and pass it to $pass1
		$pass1 = md5(md5(md5($password)));
		$user = mysql_query("SELECT * FROM `staff` WHERE `firstname`='".$firstname."' AND `lastname`='".$lastname."'") or die(mysql_error());
		$query	= mysql_fetch_array($user);
	mysql_query("INSERT INTO security SET password='".$pass1."', username='".strtolower($query[1]).".".strtolower($query[2])."', memberID='".$query[0]."', active='0'") or die(mysql_error());
		}

  }

?>


  </div>
			
      </div>
      <?php include("../../sidebar.php"); ?>
 <?php include("../../footer.php"); ?>

<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
if( document.getElementById('firstname').value==''&& document.getElementById('lastname').value==''&& document.getElementById('phonenumber').value=='' )
   {
     alert( "Please fill the blanks" );
     
     return false;
 }
   else if( document.getElementById('firstname').value=='' )
   {
     alert( "Please provide staff's firstname!" );
     
     return false;
   }
    else if( document.getElementById('lastname').value=='' )
   {
     alert( "Please provide staff's lastname!" );
     
     return false;
   }
 else if( document.getElementById('phonenumber').value=='' )
   {
     alert( "Please provide staff's phonenumber!" );
     
     return false;
}
 
   else if( document.getElementById('location').value=='' )
   {
     alert( "Please provide location!" );
     
     return false;
}
   
     else if( document.getElementById('email').value=='' )
   {
     alert( "Please provide email!" );
     
     return false;
   }
   else if( document.getElementById('position').value=='' )
   {
     alert( "Please provide position!" );
     
     return false;
   }else
   return( true );
}
//-->
</script>




</body>
</html>


