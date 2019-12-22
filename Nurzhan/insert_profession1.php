<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Proforientation</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
      <div class="  r">
        <!-- <div id="coin-  r"> <a href="#"><img src="images/Career5.jpg" width="960" height="500" alt="" /> </a> <a href="#"><img src="images/Career4.jpg" width="960" height="500" alt="" /> </a> <a href="#"><img src="images/  3.jpg" width="960" height="500" alt="" /> </a> </div> -->
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.php"><span>Home Page</span></a></li>
          <li><a href="support.php"><span>Support</span></a></li>
          <li><a href="about.php"><span>About Us</spa n></a></li>
          <li><a href="blog.php"><span>Blog</span></a></li>
          <li><a href="Register.php"><span>Register</span></a></li>
		  <li><a href="login.php"><span>Login</span></a></li>
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
<?php

$link = mysqli_connect("localhost", "root", "");
$user_id = mysqli_real_escape_string($link, $_POST['user_id']);
$ID_univer = mysqli_real_escape_string($link, $_POST['ID_univer']);
$univer_name = mysqli_real_escape_string($link, $_POST['univer_name']);
$univer_des = mysqli_real_escape_string($link, $_POST['univer_des']);
$prof_code = mysqli_real_escape_string($link, $_POST['prof_code']);
$univer_type = mysqli_real_escape_string($link, $_POST['univer_type']);
mysql_connect("localhost", "root", "") or die (mysql_error ());

mysql_select_db("proforientationdb") or die(mysql_error());

    $sel = "SELECT * FROM id_university WHERE user_id = '$user_id'";
    $res = mysql_query($sel); 
    $num = mysql_num_rows($res);
    if($num==0)
    {



		$query = "INSERT INTO id_university (user_id, ID_university, University_name, University_describtion, Profession_code, University_type) VALUES ('".$user_id."', '".$ID_univer."', '".$univer_name."', '".$univer_des."', '".$prof_code."', '".$univer_type."',)";
		$result = mysql_query ( $query );
	if ($result) header("Location: proftable1.php");}

    
    else
   {
echo " You should fill the tables";
    }


mysql_close ();
?>
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
            <li><a href="#">Home</a></li>
			<li><a href="#">Euro-grants and scholarships</a></li>
             <li><a href="#">New UNT format</a></li>
			<li><a href="#">The combination of core subjects + specialty</a></li>
            <li><a href="#">Bachelor in Kazakhstan</a></li>           
            <li><a href="#">Rating universities of Kazakhstan for 2016</a></li>
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
        <a href="#"><img src="images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
	  
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

