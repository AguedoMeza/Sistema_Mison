<div class="sidebar-collapse">
	<ul class="nav" id="main-menu">
		<li class="text-center">
			<br>
			<img src="../assets/img/logo.png" width="180" height="90">
		</li>
		<br>
        <?php

        session_name("login_supsys");
        session_start();

        $sAutentificado=$_SESSION["autentificado"];
        $sTipoUsuario=$_SESSION["sTipoUsuario"];

        if ($sAutentificado!="SI"){
        ?>
           <li><a class='active-menu'  href='../inicio/index.php' ><i class='fa fa-home fa-2x'></i>Inicio</a></li>
        <?php 
	        }
	        else{
	         if($sTipoUsuario==1){
         ?>
            <li><a class='menu' href='../inicio/index.php' ><i class='fa fa-home fa-2x'></i>Inicio</a></li>
            <li><a class='menu' href='../sucursales/index.php' ><i class='fa fa-building-o fa-2x'></i>Sucursales</a></li>
            <li><a class='active-menu' href='../departamentos/index.php' ><i class='fa fa-align-justify fa-2x'></i>Departamentos</a></li>
           <!-- <li><a class='menu' href='../familia/index.php' ><i class='fa fa-tags fa-2x'></i>Familia</a></li>-->
            <li><a class='menu' href='../proveedores/index.php' ><i class='fa fa-truck fa-2x'></i>Proveedores</a></li>
             <li><a class='menu' href='../descuentos/index.php' ><i class="fa fa-calculator fa-2x"></i>Descuentos</a></li>
            <li><a class='menu' href='../detalle_descuentos/index.php' ><i class='fa fa-percent fa-2x'></i>Detalle Descuentos</a></li>
            <li><a class='menu' href='../almacenistas/index.php' ><i class='fa fa-file-text fa-2x'></i>Almacenistas</a></li>
            <li><a class='menu' href='../compradores/index.php' ><i class='fa fa-credit-card-alt fa-lg'></i>Compradores</a></li>
            

            <li><a class='menu' href='../orden_compra/index.php' ><i class='fa fa-shopping-cart fa-2x'></i>Órdenes de Compra</a></li>
            <li><a ><i class='fa fa-check fa-2x'></i>Liberar órdenes de compra<span class='fa arrow'></span></a>
	            <ul class='nav nav-second-level'>
					<li><a  href='../liberar_orden/index.php'><i class='fa fa-calendar fa-2x'></i>Órdenes del día</a></li>
					<li><a  href='../liberar_orden/retraso.php'><i class='fa fa-calendar fa-2x'></i>Órdenes retrasadas</a></li>
					<li><a href='../liberar_orden/entregadas.php'><i class='fa fa-calendar fa-2x'></i>Órdenes liberadas</a></li>
				</ul>
			</li>
			<li><a href='../cambiar_password/index.php'><i class='fa fa-unlock-alt fa-2x'></i>Cambiar Contraseña</a></li>
			<li><a ><i class='fa fa-lock fa-2x'></i>Permisos y Seguridad<span class='fa arrow'></span></a>
	            <ul class='nav nav-second-level'>
					<li><a  href='../modulos/index.php'><i class='fa fa-check-square-o fa-2x'></i> Módulos</a></li>
					<li><a  href='../perfil/index.php'><i class='fa fa-edit fa-2x'></i>Perfiles</a></li>
					<li><a href='../detalle_perfil/index.php'><i class='fa fa-th-list fa-2x'></i>Detalle perfil</a></li>
					<!--<li><a href='../usuarios/index.php'><i class='fa fa-user fa-2x'></i>Usuarios</a></li>-->
					
				</ul>
			</li>
		<?php 
		}
		if ($sTipoUsuario==2) {
		?>
			<li><a class='active-menu'  href='../inicio/index.php' ><i class='fa fa-home fa-2x'></i>Inicio</a></li>
			<li><a class='menu' href='../orden_compra/index.php' ><i class='fa fa-shopping-cart fa-2x'></i>Órdenes de Compra</a></li>
			<li><a href='../cambiar_password/index.php'><i class='fa fa-unlock-alt fa-2x'></i>Cambiar Contraseña</a></li>
		<?php
		}
		if ($sTipoUsuario==3) {
		?>
			<li><a class='active-menu'  href='../inicio/index.php' ><i class='fa fa-home fa-2x'></i>Inicio</a></li>
			<li><a class='menu' href='../liberar_orden/index.php' ><i class='fa fa-check fa-2x'></i>Liberar órdenes de Compra</a></li>
			<li><a href='../cambiar_password/index.php'><i class='fa fa-unlock-alt fa-2x'></i>Cambiar Contraseña</a></li>
		<?php
		}
	}
		 ?>
