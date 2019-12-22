<?php
	include "SETTINGS.php";

	session_start();
	$is_admin = false;
	if($_SESSION['user']===$ADMIN){

		$is_admin = true;
		header("Location: /$SITE_DOMAIN/proftable.php");
	}
	
	
?>
<html>
<head>

<title>Proforientation</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-  r.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-  r.min.js"></script>

</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <!-- <div class="  r"> -->
        <!-- <div id="coin-  r">  -->
          <!-- <a href="#"><img src="images/slide1.jpg" width="960" height="500" alt="" /> </a>  -->
          <!-- <a href="#"><img src="images/slide2.jpg" width="960" height="500" alt="" /> </a>  -->
          <!-- <a href="#"><img src="images/slide3.jpg" width="960" height="500" alt="" /> </a> </div> -->
        <!-- </div> -->
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.php"><span>Home Page</span></a></li>
          <li><a href="support.php"><span>Support</span></a></li>
          <li><a href="about.php"><span>About Us</spa n></a></li>
          <li><a href="register.php"><span>Register</span></a></li>
		  <?php
			if(isset($_SESSION['user'])){
				echo "<li><a href=blog.php><span>Blog</span></a></li>";
				echo "<li><a href='auth/logout.php'><span>Logout</span></a></li>";
				echo "<li><a href='#'><span>Hello $_SESSION[user]</span></a></li>";
			}else{
				
				echo "<li><a href='login.php'><span>Login</span></a></li>";
			}
		  ?>
        </ul>
		
      </div>
      <div class="logo">
	     <h1><a href="index.php"><span>Proforientation</span> <small>Make a great FUTURE</small></a></h1>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
  
    <div class="content_resize">
      <div class="mainbar">
	          <div class="article">
			    <h2><span> Your dream profession  </span></h2>
          <div class="clr"></div>
	  <form action="insert_profession.php" method="post">
	  <ol>
	  <li>
    <br>Profession name:<br>
	<input type="text" name="profname"><br>
	  </li>
	  <li>
    Profession desciption:<br>
	<input type="text" name="profdes"><br>
	  </li>
	  <li>
    University for profession:<br>
	<input type="text" name="profuniver"><br>
	</li>
	</ol>
    <input type="submit"><br>
</form>
        </div>
		
			          <div class="article">
			    <h2><span> Your dream profession  </span></h2>
          <div class="clr"></div>
	  <form action="insert_profession1.php" method="post">
	  <ol>
	  <li>
    <br>User ID:<br>
	<input type="text" name="user_id"><br>
	  </li>
	  <li>
    <br>ID University:<br>
	<input type="text" name="ID_univer"><br>
	  </li>
	  <li>
    <br>University name:<br>
	<input type="text" name="univer_name"><br>
	  </li>
	  <li>
    <br>University desciption:<br>
	<input type="text" name="univer_des"><br>
	  </li>
	  <li>
    <br>Profession code:<br>
	<input type="text" name="prof_code"><br>
	  </li>
	  <li>
    <br>University type:<br>
	<input type="text" name="univer_type"><br>
	</li>
	</ol>
    <input type="submit"><br>
</form>
        </div>


        </div>
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li class="active"><a href="Home.php"><span>Home</span></a></li>
			<li><a href="#">Euro-grants and scholarships</a></li>
            <li><a href="#">New UNT format</a></li>
			<li><a href="#">The combination of core subjects + specialty</a></li>
            <li><a href="Bachelor.php">Bachelor in Kazakhstan</a></li>           
            <li><a href="National1.php">Rating universities of Kazakhstan for 2016</a></li>
			<li><a href="#">Nazarbayev University</a></li> 
            <li><a href="#">Information about the universities of Kazakhstan</a></li>
          </ul>
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> 
		<a href="#"><img src="images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> 
		<a href="#"><img src="images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> 
		<a href="#"><img src="images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> 
		<a href="#"><img src="images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> 
		<a href="#"><img src="images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a></div>
	  
	  </div>
      <div class="col c2">
        <h2><span></span> </h2>
        <p> </p>
        <ul class="fbg_ul">
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Register Us</span></h2>
        <p class="Register_info"> <span>�����:</span> �.�����, ������ ����, ��. ������� ���, 266.<br />
          <span> ����� �������� �������:</span> (7262) 99-98-55.<br />
          <span>E-mail:</span> <a href="#">info@trz.nis.edu.kz </a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="#">Domain Name</a>. All Rights Reserved</p>
      <p class="rf">Get More <a target="_blank" href="http://10.20.28.128/">Portal NIS</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>
