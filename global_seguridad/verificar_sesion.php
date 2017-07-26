<?php 

//iniciamos la sesión 
session_name("login_supsys"); 
session_start(); 

//antes de hacer los cálculos, compruebo que el usuario está logueado 
//utilizamos el mismo script que antes 
if ($_SESSION["autentificado"] != "SI") 
{ 
    //si no está logueado lo envío a la página de autentificación 
    echo"<script language=\"javascript\">window.location=\"../login/login.php\"</script>";
} 
else 
{ 
	//se manda llamar la conexion
	include "datos_usuario_acceso.php";

   if ($acceso_modulo != 1) {
   		echo"<script language=\"javascript\">window.location=\"../inicio/index.php\"</script>";
   }
}
?>