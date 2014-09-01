<?php
session_start();
if($_SESSION['username']){
$myname=$_SESSION['username'];
$name= strstr($myname,'.',true);
	
}else{
	header("Location: ../../index.php");
	}
?>
