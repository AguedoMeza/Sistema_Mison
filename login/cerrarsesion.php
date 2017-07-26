<?php
	//iniciamos la sesión 
	session_name("login_supsys"); 
	session_start(); 

	session_unset();
	session_destroy(); // Destruyo la sesión 
		
	echo "<script language=\"javascript\">window.location=\"../login/login.php\"</script>";
?>