<!DOCTYPE html>
<header>
	<?php include("../conn/member.php"); ?>
</header>
<html >
<head>
<title>ADD ROUTE</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../../style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->

<style>

.sidebarthis{
text-indent: 200px;
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

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Adding Route Details to the Database</h2>
 
 
 <a href="addroute.php">
  <button type="button" class="btn btn-primary btn-lg">Add New Route</button>
</a>
<a href="routelist.php">
  <button type="button" class="btn btn-primary btn-lg">view routes</button>
</a>
<a href="newsode.php">
  <button type="button" class="btn btn-primary btn-lg">Add Source/Destination</button>
</a>

<a href="newvia.php">
  <button type="button" class="btn btn-primary btn-lg">Add Via_Station</button>
</a>

<fieldset><legend>Add Route</legend>
 
 <table class='table-my'>
<form class="form-horizontal" onsubmit="return(validate())" name="addroute"role="form" method="post" action="">


     <?php
require_once('../conn/conn.php');

 $query = "SELECT * FROM stations";
 $result = mysql_query($query); ?>
 
 <tr><td>
 <div class="form-group">
 <label for="source" class="col-sm-3 control-label"><strong>Source:</label> </td><td>
 <select type="text" id="source" class="mystyle" name="source" required='required'>
<option value=''>--select--</option>
 <?php while ($row = mysql_fetch_array($result)) {
 ?>

 <option value="<?php echo $row['source_destination'];?>"> <?php echo $row['source_destination'];?> </option>  
 <?php 
} 
?>
 </select> 
</div>
</td>


</div>
 <td> 
<div class="col-sm-9 control-label">
  <a href="sodetable.php">
  <button type="button" class=" ">Edit Source/Destination</button>
</a>
</div>
</td></tr>

   
     <?php
require_once('../conn/conn.php');

 $query = "SELECT * FROM stations";
 $result = mysql_query($query); ?>
 
 <tr><td>
 <div class="form-group">

    <label for="destination" class="col-sm-3 control-label"><strong>Destination:</label> </td><td>
 <select type="text" class="mystyle" name="destination" required='required'>
<option value=''>--select--</option>

 <?php while ($row = mysql_fetch_array($result)) {
 ?>

 <option value="<?php echo $row['source_destination'];?>"> <?php echo $row['source_destination'];?> </option>  
 <?php 
} 
?>


 </select> 
</div>
</td></tr>

</div>


<tr><td>
     <div class="form-group">
    <label for="fare" class="col-sm-3 control-label"><strong>Fare:</label> </td><td>
   <div class="col-sm-15">
      <input type="text" class="form-control" id="fare" placeholder="Enter fare" name="fare">
    </div>
    </div>
	</td></tr>
    
     
          <?php
require_once('../conn/conn.php');

 $query = "SELECT * FROM via_stations";
 $result = mysql_query($query); ?>
 
 <tr><td>
 <div class="form-group">
 <label for="via_station" class="col-sm-3 control-label"><strong>Via_station:</label> </td><td>
 <select type="text" class="mystyle" name="via_station" required='required'>
<option value=''>--select--</option>
 <?php while ($row = mysql_fetch_array($result)) {
 ?>

 <option value="<?php echo $row['via_stations'];?>"> <?php echo $row['via_stations'];?> </option>  
 <?php 
} 
?>
 </select> 
</div>
</td>

</div>
 

<td>  
  <div class="form-group col-sm-9 control-label">
  <a href="viatable.php">
  <button type="button" class=" ">Edit Via_station</button>
</a>
</div>
</td></tr>


<tr><td>
    <div class="form-group">
    <label for="distance" class="col-sm-3 control-label"><strong>Distance:</label> </td><td>
    <div class="col-sm-15">
      <input type="distance" class="form-control" id="distance" placeholder="Enter distance" name="distance">
    </div>
  </div>
  </td></tr>
  
  <tr><td> </td><td>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" name="submit"class="btn btn-default">Submit</button>
    
      <button type="reset"name="reset"class="btn btn-default">Reset</button>
    </div>
  </div>
 </td></tr> 
  
</form>

</table>
</fieldset>	




<?php
require_once('../conn/conn.php');

if(isset($_POST['submit'])){
$source = $_POST['source'];
$destination = $_POST['destination'];
$fare = $_POST['fare'];
$via_station = $_POST['via_station'];
$distance = $_POST['distance'];

mysql_query("INSERT INTO route SET fare='".$fare."',source='".$source."', destination='".$destination."',via_station='".$via_station."',distance='".$distance."'") or die(mysql_error());

 
}

?>

 
   </div>
			
      </div>
<script type="text/javascript">
function validate()
{
if( document.getElementById('fare').value=='')
   {
     alert( "fill the fare field!" );
     
     return false;
 }

   if( addroute.source.value==addroute.destination.value)
   {
     alert( "ERROR! source and destination cannot be the same" );
     
     return false;
   }

else return true;
}
</script>
     <?php include("../../sidebar.php"); ?>
 <?php include("../../footer.php"); ?>
