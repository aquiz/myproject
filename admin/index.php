<!DOCTYPE html>
<?php include("conn/member.php"); ?>
<html >
<head>
<title>Admin_Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="index.php"><center> TRANSPORT SYSTEM </center> </a></h1></div>
      <div class="menu_nav">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Support</a></li>
          <li><a href="">About Us</a></li>
       
          <li><a href="">Hi, <?php echo $name; ?></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>logged in as Administrator</h2>
          <p>Click the respective links on the left for more access.</p>
          
        </div>
      </div>
     <div class="sidebar">
        <div class="gadget">

<table class="table table-hover table-bordered">
        
          
             <tr><td><a  href="index.php"><center><strong> Home </strong> </center></a> </td></tr>
            <tr><td> <a href="module/stafflist.php"><center><strong> Staffs </strong> </center></a></td> </tr>
            <tr> <td><a href="module/buslist.php"><center><strong> Buses </strong> </center></a> </td></tr>
            <tr><td> <a href="module/routelist.php"><center><strong> Routes </strong> </center></a> </td></tr>
	     <tr><td><a href=""><center><strong> Report </strong> </center></a> </td></tr>
            <tr><td> <a href=""><center><strong> My Account </strong> </center></a></td> </tr>
             <tr><td><a href="conn/logout.php"><center><strong> LogOut </strong> </center></a> </td></tr>
          </table>
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2>Image Gallery</h2>
        
        <div class="clr"></div>
      </div>
      <div class="col c2">
        <h2>About</h2>
        
      </div>
      <div class="col c3">
        <h2>Contact</h2>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Right Reserved 2014 </p>
      <ul class="fmenu">
        <li><a href="">Home</a></li>
        <li><a href="">Support</a></li>
        
        <li><a href="">About Us</a></li>
        <li><a href="">Contacts</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
