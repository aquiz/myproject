<?php include("../../header.php"); ?>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Editing Details</h2>
 

<?php
include '../conn/conn.php';
$id=$_GET['staffID'];
if(!isset($_POST['submit'])){
$sql="SELECT * FROM staff WHERE staffID= '$id'";
$result = mysql_query($sql);
$agentedit = mysql_fetch_array($result);
}
?>

<fieldset><legend></legend>
<table>
<form class="form-horizontal" role="form" method="post" action="EditAgent.php?staffID=<?php echo "$id"; ?>">

<tr><td>
  <div class="form-group">
    <label for="firstname" class="col-sm-3 control-label">Firstname:</label> </td><td>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $agentedit['firstname']; ?>">
    </div>
  </div>
</td></tr> 
 
  <tr><td>
  <div class="form-group">
    <label for="lastname" class="col-sm-3 control-label">Lastname:</label> </td><td>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $agentedit['lastname']; ?>">
    </div>
  </div>
  </td></tr>
  
  
  <tr><td>
     <div class="form-group">
    <label for="phonenumber" class="col-sm-3 control-label">Phone Number:</label> </td><td>
   <div class="col-sm-5">
      <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $agentedit['phonenumber']; ?>">
    </div>
    </div>
	</td></tr>
	
	
   <tr><td> 
      <div class="form-group">
    <label for="location" class="col-sm-3 control-label">Location:</label> </td><td>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="location" name="location" value="<?php echo $agentedit['location']; ?>">
    </div>
  </div>
  </td></tr>
  
  
  <tr><td>
    <div class="form-group">
    <label for="email" class="col-sm-3 control-label">Email:</label> </td><td>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $agentedit['email']; ?>">
    </div>
  </div>
  </td></tr>
  
  <tr><td></td><td>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" name="submit"class="btn btn-default">modify</button>
      <button type="view" name="view" class="btn btn-default">view</button>
    </div>
  </div>
  </td></tr>
</form>
</table>
</fieldset>	

<?php
if(isset($_POST['submit'])){
$u="UPDATE staff SET `firstname`='$_POST[firstname]', `lastname`='$_POST[lastname]', `email`='$_POST[email]',`location`='$_POST[location]', `phonenumber`='$_POST[phonenumber]' WHERE staffID ='$id'";
mysql_query($u) or die("error".mysql_error());
echo "agent has been modified";
 header("location: stafflist.php"); 	
}
elseif(isset($_POST['view'])){
  header("location: stafflist.php");
}
mysql_close();
?>






 
 
	
		  </div>
			
      </div>
        <?php include("../../sidebar.php"); ?>
 <?php include("../../footer.php"); ?>  
