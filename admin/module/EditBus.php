<?php include("../../header.php"); ?>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Editing Bus Details</h2>
 

<?php
include '../conn/conn.php';
$id=$_GET['busID'];
if(!isset($_POST['submit'])){
$sql="SELECT * FROM bus WHERE busID= '$id'";
$result = mysql_query($sql);
$busedit = mysql_fetch_array($result);
}
?>
<fieldset>
<table>
<form action="EditBus.php?busID=<?php echo "$id"; ?>" method="post" >

<tr><td>model:</td><td><input type="text" name="inputmodel" value="<?php echo $busedit['model']; ?>"></td></tr>

<tr><td>seats:</td><td><input type="text" name="inputseats" value="<?php echo $busedit['seats']; ?>" ></td></tr>

<tr><td></td><td><input type="hidden" name="id" value="<?php echo '$view';?>" ><input type="submit" name="submit" value="modify"><input type="submit" name="show" value="View"></td></tr></table>
</form>
</table>
</fieldset>

<?php
if(isset($_POST['submit'])){
$u="UPDATE bus SET `model`='$_POST[inputmodel]', `seats`='$_POST[inputseats]' WHERE busID = '$id' ";
mysql_query($u) or die("error".mysql_error());
echo "bus has been modified";
 header("location: buslist.php"); 	
}
elseif(isset($_POST['show'])){
  header("location: buslist.php");
}
mysql_close();
?>

	
		  </div>
			
      </div>
<?php include("../../sidebar.php"); ?>
 <?php include("../../footer.php"); ?>  
       
