<?php
$username = "";
//Connects to your Database
require_once('conn.php');

//Declaring variables username and password
$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_POST['submit'])){

$check = mysql_query("SELECT * FROM security WHERE username = '$username'") or die(mysql_error());
$numrows = mysql_num_rows($check);
$pass = md5(md5(md5($password)));
if($numrows!=0){
	while($row = mysql_fetch_assoc($check)){
		$dbusername = $row['username'];
		$dbpassword = $row['password'];
		$dbactive = $row['active'];
		}
			//include('../module/addstaff.php');
			
			if($dbusername == $username && $dbpassword == $pass){
				if($dbactive == '1'){
					session_start();
				header("Location: ../");
				$_SESSION['username'] = $username;
				}else{
					header("Location: changekey.php");
					}
	}else{
		//echo "Incorrect Username or Password";
		echo '<script type="text/javascript">alert("Wrong Username or password!! Please Try Again!");window.location=\'../../index.php\';</script>';
		}
	}else{
		die("That user doesn't exist");
		}
}else{
	die("Please enter username and password");
	}
 ?>

