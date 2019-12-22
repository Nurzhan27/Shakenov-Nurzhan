<?php
	include 'SETTINGS.php';
	session_start();
	$is_admin = false;


?>
<html>
<head>
<title>Proforientation | Blog</title>
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
          <li><a href="support.php"><span>Support</span></a></li>
          <li><a href="about.php"><span>About Us</span></a></li>
          <li class="active"><a href="blog.php"><span>Blog</span></a></li>
		  <?php
			if(isset($_SESSION['user'])){
				
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
          <h2><span>A Blog</span> Entry</h2>
          <div class="clr"></div>
          <p>Posted by <a href="#">Admin</a> <span>&nbsp;&bull;&nbsp;</span> Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
          <p></p>
          <p>Tagged: <a href="#">orci</a>, <a href="#">lectus</a>, <a href="#">varius</a>, <a href="#">turpis</a></p>
          <p><a href="#"><strong>Comments (3)</strong></a> <span>&nbsp;&bull;&nbsp;</span> May 27, 2010 <span>&nbsp;&bull;&nbsp;</span> <a href="#"><strong>Edit</strong></a></p>
        </div>
        <div class="article">
          <h2><span>3</span> Responses</h2>
          <div class="clr"></div>
          <div class="comment"> <a href="#"><img src="images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
            <p><a href="#">admin</a> Says:<br />
              April 20th, 2009 at 2:17 pm</p>
            <p></p>
          </div>
          <div class="comment"> <a href="#"><img src="images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
            <p><a href="#">Admin</a> Says:<br />
              April 20th, 2009 at 3:21 pm</p>
            <p></p>
          </div>
          <div class="comment"> <a href="#"><img src="images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
            <p><a href="#">admin</a> Says:<br />
              April 20th, 2009 at 2:17 pm</p>
            <p></p>
          </div>
        </div>
        <div class="article">
          <h2><span>Leave a</span> Reply</h2>
          <div class="clr"></div>
          <form action="#" method="post" id="leavereply">
            <ol>
              <li>
                <label for="name">Name (required)</label>
                <input id="name" name="name" class="text" />
              </li>
              <li>
                <label for="email">Email Address (required)</label>
                <input id="email" name="email" class="text" />
              </li>
              <li>
                <label for="website">Website</label>
                <input id="website" name="website" class="text" />
              </li>
              <li>
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="8" cols="50"></textarea>
              </li>
              <li>
                <input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
                <div class="clr"></div>
              </li>
            </ol>
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
