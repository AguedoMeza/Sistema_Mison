<?php
	include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];

$p_clave_depto = $_POST['clave_depto'];
$p_departamento = $_POST['departamento'];
date_default_timezone_set('America/Monterrey');
$fecha = date('Y-m-d');
$hora = date('h:i:s');




        $qry = "SELECT clave_depto, departamento 
                    FROM departamentos
                    WHERE clave_depto = '$p_clave_depto'";

         $consulta=mysqli_query($conexion,$qry) or die (mysqli_connect_errno());


            $numFilas=mysqli_num_rows($consulta);

            if($numFilas>=1)
            {
                echo"<script language=\"javascript\">window.location=\"index.php?existe=1\" </script>";
            }
            else
            {

$qry  = "INSERT INTO departamentos (clave_depto, departamento, fecha, hora, activo, usuario) 
VALUES ('$p_clave_depto', '$p_departamento', '$fecha', '$hora', '1', '$s_idUsuario ')"; 
 $insertar = mysqli_query($conexion,$qry) or die(mysql_error());

        echo"<script language=\"javascript\">window.location=\"index.php?existe=2\" </script>";
            }
 
?>