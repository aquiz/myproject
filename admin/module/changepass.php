<!DOCTYPE html>
<header>
	<?php include("../conn/member.php"); ?>
</header>
<html >
<head>
<title>Administrators_List</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../../style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->
<style>

.sidebarthis{
text-indent: 220px;

}

td{
text-align:left;
font:bold 12px/1.2em Helvetica,Arial, sans-serif;
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
      
          <li><a href="">Contact Us</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content img">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">

    <h2>Change Password:</h2>
   <form method="POST" action="">
    <table class="table table-my table-bordered sidebarthis">
		<tr>
		   <td>Enter your UserName:</td>
			<td><input type="username" size="10" name="username"></td>
		   </tr>
		   <tr>
			<td>Enter your existing password:</td>
			<td><input type="password" size="10" name="password"></td>
		   </tr>
		  <tr>
			<td>Enter your new password:</td>
			<td><input type="password" size="10" name="newpassword"></td>
			</tr>
			<tr>
		   <td>Re-enter your new password:</td>
		   <td><input type="password" size="10" name="confirmnewpassword"></td>
		</tr>
    </table>
			<p><input type="submit" value="Update Password">
    </form>

 <?php
include '../conn/conn.php';

$username = $_POST['username'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysql_query("SELECT * FROM `security` WHERE username='$username'");
        $info = mysql_fetch_array( $result );
        $pass = md5(md5(md5($password)));
        $newpass = md5(md5(md5($newpassword)));
        if($result){
			if($info[1]==$pass){
				if($newpassword == $confirmnewpassword){
					$sql=mysql_query("UPDATE `security` SET password='$newpass', active = '1' WHERE username='$username'");
					echo "Congratulations You have successfully changed your password";
			header("Location: ../../admin/");
					}else{
						echo "Passwords do not match.";
						}
				}else{
					echo "";
					}

   }else{
	   echo "INVALID USERNAME";
	   }
    ?>
</div>
</div>
  
     <?php include("../../sidebar.php"); ?>
 <?php include("../../footer.php"); ?>  
