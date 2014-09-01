<!DOCTYPE html>
<header>
	<?php include("../conn/member.php"); ?>
</header>
<html >
<head>
<title>ADD</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../../style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->

<style>

.sidebarthis{
text-indent: 100px;
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
          <h2>Adding Source/Destination.</h2>
 


<a href="addroute.php">
  <button type="button" class="btn btn-primary btn-lg">Add New Route</button>
</a>
<a href="newsode.php">
  <button type="button" class="btn btn-primary btn-lg">Add Source/Destination</button>
</a>
<a href="newvia.php">
  <button type="button" class="btn btn-primary btn-lg">Add Via_Station</button>
</a>
<a href="sodetable.php">
  <button type="button" class="btn btn-primary btn-lg">view source/destinations</button>
</a>

<fieldset>
<table class='table  sidebarthis'>
<form class="form-horizontal" onsubmit="return(validate())" role="form" method="post" action="">

<tr><td>
    <div class="form-group">
    <label for="source_destination" class="col-sm-13 control-label"><strong><center>New_Source/Destination:</label> </td><td>
    <div class="col-sm-14">
      <input type="text" class="form-control" id="source_destination" placeholder="Enter new Source/Destination" name="source_destination">
 

 <tr><td> </td><td>
 <div class="form-group">
    <div class="col-sm-offset-3 col-sm-5">
      <button type="submit" name="submit"class="btn btn-default">add</button>

  </div>
  </div>
 

    </div>
  </div>
  </td><tr>
   
</form>
</table>

<?php
require_once("../conn/conn.php");
if(isset($_POST['submit'])){
$source_destination = $_POST['source_destination'];

mysql_query("INSERT INTO stations SET source_destination='".$source_destination."'") or die(mysql_error());

}

?>
</fieldset>


 
 
	
		  </div>
			
      </div>
<script type="text/javascript">
function validate()
{
if( document.getElementById('source_destination').value=='')
   {
     alert( "fill something please!" );
     
     return false;
 }


else return true;
}
</script>
              <?php include("../../sidebar.php"); ?>
 <?php include("../../footer.php"); ?>  
