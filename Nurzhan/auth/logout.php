<?php
	include "../functions.php";
	include "../SETTINGS.php";
	session_start();
	if(login_required()){
    unset($_SESSION['user']);
    header("Location: /$SITE_DOMAIN");
	}
?>