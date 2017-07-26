<?php 
include("../global_seguridad/verificar_sesion.php");

$variable=$_SESSION["s_IdNameUser"];
//echo $variable;
$nombre=$_SESSION["s_IdPersona"];
//echo $nombre;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="charset=utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
  
    <title>SupSys</title>

    <link href='../assets/img/logo.png' rel='shortcut icon' type='image/png'/> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" /> <!--ico-->

<!-- SCRIPTS DE SLIDER ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo -->


  <link rel="stylesheet" href="../assets/css/responsiveslides.css">
  <link rel="stylesheet" href="../assets/css/demo.css">
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/responsiveslides.min.js"></script>
  
  <script>

   // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
       $("#slider1").responsiveSlides({
        maxwidth: 1000,
        speed: 800
      });

      // Slideshow 2
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        speed: 300,
        maxwidth: 540
      });

      // Slideshow 3
      $("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
        maxwidth: 540
      });

      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

      });

  </script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SupSys</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  &nbsp; <a href="../login/cerrarsesion.php" class="btn btn-danger square-btn-adjust">Cerrar Sesion</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            
					 <?php include ("../inicio/menu.php"); ?>
                        
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h5 align="right">Bienvenido(a): <b><?php echo "$nombre" ;?> </b></h5><br>
                     <!--<h2>Pagina en blanco</h2>  
                        <h2>BIENVENIDO(A) AL SISTEMA DE ACTIVIDADES GERENCIALES </h2>--> 


                      <!-- SLIDER oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo -->

     
                             <!-- Slideshow 1 -->
    <ul class="rslides" id="slider1">
      <li><img src="images/principal_marco.jpg" alt=""></li>
      <li><img src="images/arb_marco.jpg" alt=""></li>
      <li><img src="images/vill_marco.jpg" alt=""></li>
    </ul>




                </div>
                 <!-- /. ROW  -->
                 <hr />              
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
   <!-- <script src="../assets/js/jquery-1.10.2.js"></script>-->
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
</body>
</html>