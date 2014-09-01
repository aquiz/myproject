<!DOCTYPE html>
<!DOCTYPE html>
<header>
	<?php include("../conn/member.php"); ?>
</header>
<html >
<head>
<title>ADD BUS</title>
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
<a href="addbus.php">
  <button type="button" class="btn btn-primary btn-lg">Add Bus</button>
</a>

<a href="buslist.php">
  <button type="button" class="btn btn-primary btn-lg">view Buses</button>
</a>

          <h2>Adding Bus Details to the Database</h2>
          	  
<?php include("../conn/conn.php");?>


<fieldset><legend>Add bus</legend>
<table class='table-mystyle sidebarthis'>
<form name="addbus" onsubmit="return(validate())" method="post" action="">

<tr><td><strong>model:</td><td><input type="text" id="model" name="model"></td></tr>

<tr><td><strong>seats:</td><td><input type="text" id="seats" name="seats"></td></tr>

<tr><td></td><td><input type="submit" name="submit" value="Submit">

<input type="reset" name="reset" value="Reset"></td></tr></table>


</form>
</table>
</fieldset>
<?php
require_once('../conn/conn.php');

if(isset($_POST['submit'])){

$model = $_POST['model'];
$seats = $_POST['seats'];
mysql_query("insert into bus set model='".$model."', seats='".$seats."' ") or die(mysql_error());
header("location: buslist.php");

}
elseif(isset($_POST['view'])){
	header("location: buslist.php");
}
?>

	
		  </div>
			
      </div>
 <?php include("../../sidebar.php"); ?>
 <?php include("../../footer.php"); ?>
<script type="text/javascript">
function validate()
{
if( document.getElementById('model').value==''|| document.getElementById('seats').value=='')
   {
     alert( "Please fill the blank" );
     
     return false;
 }

else if( document.getElementById('model').value==''&& document.getElementById('seats').value=='')
   {
     alert( "Please in fill the blanks" );
     
     return false;
 }

else return true;
}
</script>
</body>
</html>
