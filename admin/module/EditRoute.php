<?php include("../../header.php"); ?>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Editing Route Details</h2>
 

<?php
include '../conn/conn.php';
$id=$_GET['routeID'];
if(!isset($_POST['submit'])){
$sql="SELECT * FROM route WHERE routeID= '$id'";
$result = mysql_query($sql);
$routeedit = mysql_fetch_array($result);
}
?>

<fieldset><legend>Edit route</legend>

<table>
<form class="form-horizontal" role="form" method="post" action="EditRoute.php?routeID=<?php echo "$id"; ?>">

<tr><td>
  <div class="form-group">
    <label for="source" class="col-sm-3 control-label">Source:</label> </td><td>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="source" name="source" value="<?php echo $routeedit['source']; ?>">
    </div>
  </div>
  </td></tr>
  
  <tr><td>
  <div class="form-group">
    <label for="destination" class="col-sm-3 control-label">Destination:</label> </td><td>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="destination" name="destination" value="<?php echo $routeedit['destination']; ?>">
    </div>
  </div>
  </td></tr>
  
  
  <tr><td>
     <div class="form-group"> 
    <label for="via" class="col-sm-3 control-label">Bus Fare:</label> </td><td>
   <div class="col-sm-5">
      <input type="text" class="form-control" id="fare" name="fare" value="<?php echo $routeedit['fare']; ?>">
    </div>
    </div>
	</td></tr>
	
	
  <tr><td>  
      <div class="form-group">
    <label for="via" class="col-sm-3 control-label">Via:</label> </td><td>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="via" name="via_road" value="<?php echo $routeedit['via_station']; ?>">
    </div>
  </div>
  </td></tr>
  
  
  <tr><td>
    <div class="form-group">
    <label for="distance" class="col-sm-3 control-label">Distance:</label> </td><td>
    <div class="col-sm-5">
      <input type="int" class="form-control" id="distance" name="distance" value="<?php echo $routeedit['distance']; ?>">
    </div>
  </div>
  </td></tr>
  
  <tr><td> </td><td>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" name="submit"class="btn btn-default">modify</button>
      <button type="view" name="show" class="btn btn-default">view</button>
    </div>
  </div>
  </td></tr>
</form>
</table>

</fieldset>	

<?php
if(isset($_POST['submit'])){
$u="UPDATE route SET `distance`='$_POST[distance]', `fare`='$_POST[fare]', `via_station`='$_POST[via_road]',`source`='$_POST[source]', `distance`='$_POST[distance]' WHERE routeID = '$id' ";
mysql_query($u) or die("error".mysql_error());
echo "route has been modified";
 header("location: routelist.php"); 	
}
elseif(isset($_POST['show'])){
  header("location: routelist.php");
}
mysql_close();
?>
  

		  </div>
			
      </div>
        <?php include("../../sidebar.php"); ?>
 <?php include("../../footer.php"); ?>  
      
