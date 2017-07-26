<?php
/////////////////////////////////////////////parte de sesiones
include("../configuracion/conexion.php");

/////////////////////////////
$pUser=$_POST["usuario"];
$pContra=md5($_POST["contrasena"]);

//Se realiza la consulta para creditar el usuario
$qry = "SELECT id, nombre_usuario, pass, perfil, nombre_completo FROM usuarios WHERE nombre_usuario = '$pUser' AND pass = '$pContra' AND activo = '1'";

$consulta = mysqli_query($conexion, $qry) or die (mysqli_error());
					   
//Descargamos el arreglo que arroja la consulta
$row = mysqli_fetch_array($consulta);

//Se cuenta el numero de filas
$num = mysqli_num_rows($consulta);

//Verificar si es un usuario existente o no
if($num==1)
{
	//asigno un nombre a la session
	session_name("login_supsys");
	session_start();

	//$_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
	$_SESSION["autentificado"]= "SI";
	$_SESSION["s_IdUser"]= $row[0];
	$_SESSION["s_IdNameUser"]= $row[1];
	$_SESSION["s_IdPass"]= $row[2];
	$_SESSION["sTipoUsuario"]= $row[3];
	$_SESSION["s_IdPersona"]= $row[4];

	
	
    ////////////////////////////////////////////////////////////////////////////

	header("Location: ../inicio/index.php");

}
else
{
	//Redirecciona a una pagina especifica
	header("Location: login.php?ErrorAutentificacion");
}


?>