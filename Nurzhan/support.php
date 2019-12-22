<?php
	include 'SETTINGS.php';
	session_start();
	$is_admin = false;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Proforientation | Support</title>
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
        <!-- <div id="coin-  r"> <a href="#"><img src="images/.jpg" width="960" height="500" alt="" /> </a> <a href="#"><img src="images/  2.jpg" width="960" height="500" alt="" /> </a> <a href="#"><img src="images/  3.jpg" width="960" height="500" alt="" /> </a> </div> -->
      </div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php"><span>Home Page</span></a></li>
          <li class="active"><a href="support.php"><span>Support</span></a></li>
          <li><a href="about.php"><span>About Us</span></a></li>
          
		  <?php
			if(isset($_SESSION['user'])){
				echo "<li><a href=blog.php><span>Blog</span></a></li>";
				echo "<li><a href='auth/logout.php'><span>Logout</span></a></li>";
				echo "<li><a href='#'><span>Hello $_SESSION[user]</span></a></li>";
			}else{
				echo "<li><a href='Register.php'><span>Register</span></a></li>";
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
          <h2><span>Support to</span> Company Name</h2>
          <div class="clr"></div>
          <p>They say if you love what you do, you never have to work a day in your life. Not all of us are lucky enough to be working in jobs that we really enjoy. When generation Y was growing up in India, the more accepted and therefore preferred education streams were medicine and engineering. Not much attention was given to where the interest or the competence of the individual lay. As the Indian economy and the job market in the country began to open up, parents and their wards became aware of a more diverse set of career choices. Role models in sports and other off beat careers began to emerge. Movies such as Aamir Khan’s 3 Idiots helped expose an entire generation of parents and students to the perils of forcing the wrong career choice onto children.</p>
<p><img src="images/01_proforientation.jpg"  width="250" height="174" <h1 align="right"><div id="menu"> <font size="5"><p> How to choose the right career: </p></font></Font>
<OL><li>Consider Your Interests</li></OL>
<li>Consider your dream career.</li>
<li>Consider your hobbies.</li>
<li>Consider what you enjoy or enjoyed in school.</li>
<OL><li>Consider Your Skills</li></OL>
<li>Think about what you are or were good at in school. </li>
<li>Consider what skills you excel in.</li>
<li>Consider your interpersonal skills.</li>
<li>Ask someone if you don't know.</li>
<OL><li>Consider Your Current State</li></OL>
<li>Explore yourself.</li>
<li>Consider your financial situation.</li>
<li>Think about the education you will have as you enter a career.</li>
<li>Think about returning to school.</li>
<li>Do more research.</li>
<OL><li>Consider Your Future</li></OL>
<li>Consider the careers you have easy access to.</li>
<li>Consider your future financial security.</li>
<li>Consider your future job stability.</li>
<li>Look at the Occupational Outlook Handbook.</li> </div></h1></p>
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
        <p class="Register_info"> <span>Адрес:</span> г.Тараз, массив Арай, ул. Домалак ана, 266.<br />
          <span> Номер телефона приёмной:</span> (7262) 99-98-55.<br />
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
