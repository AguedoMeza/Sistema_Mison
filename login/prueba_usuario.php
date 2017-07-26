<?php 
session_name("login_supsys"); 
session_start(); 

echo $_SESSION["autentificado"];
echo $_SESSION["s_IdUser"];
echo $_SESSION["s_IdNameUser"];
echo $_SESSION["s_IdPass"];
echo $_SESSION["sTipoUsuario"];
echo $_SESSION["s_IdPersona"];
 ?>