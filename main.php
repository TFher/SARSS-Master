<!DOCTYPE html>
<html lang="en">
<?php
//Revisamos cookie de session y/o revisamos session
    if(isset($_COOKIE['_coockie'])){
	session_start();
	$_SESSION['usuario']=$_COOKIE['_coockie'];
    }
    else{
//Incluimos el archivo de sesion (seguridad del login)
	include "sesion.php";
    }
//Incluimos el archivo de conexion a la BD   
    include "conexion.php";
        
?>
<head>
    <title>SARSS - Inicio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Librerias bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/animate.css">
    <link type="text/css" rel="stylesheet" href="styles/all.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="styles/pace.css">
    <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">
	<link type="text/css" rel="stylesheet" href="styles/form.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
    <div>
        <!--EMPIEZA BARRA DE ARRIBA-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <a id="logo" href="main.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Administrador</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
            <script>
			window.onload = document.getElementById("menu-toggle")
			.addEventListener("click", muestra_oculta, false);

			function muestra_oculta(){
				var imagen = document.getElementById("imagen");
				var boton = document.getElementById("menu-toggle");

				if (imagen.style.display != "none"){
				
				imagen.style.display = "none";
				}else{
				
				imagen.style.display = "";
				}
			}
</script> 
                
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"></div>
                </form>
                
                <div class="news-update-box hidden-xs"></div>
                
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    </li>
                    
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle">&nbsp;<span class="hidden-xs">
                    		<?php
		//Mostramos el nombre del ususario logueado en base a la sesion
		    echo "Hola! ";
		    echo $_SESSION["usuario"];
		?>
                    </span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="eventos.php"><i class="fa fa-calendar"></i>Eventos</a></li>    
                            <li class="divider"></li>                           
                            <li><a href="cierra.php"><i class="fa fa-key"></i>Cerrar sesión</a></li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
        </nav>
            
        </div>
        <!--TERMINA BARRA DE ARRIBA-->

            <!--EMPIEZA SIDEBAR DE LA IZQUIERDA-->
          <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li class="active"><a href="main.php"><i class="fa fa-desktop fa-fw">
					</i><span class="menu-title">Inicio</span></a></li>
                    </li>
                    <li><a href="eventos.php"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Eventos</span></a>
                      
                    </li>
                    <li><a href="#"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Consultas</span></a>
                          
                    </li>
                    <li><a href="#"><i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Reportes</span></a>
                      
                    </li>
                    <li><a href="#"><i class="fa fa-file-o fa-fw">
                        <div class="icon-bg bg-yellow"></div>
                    </i><span class="menu-title">Usuarios</span></a>
                </ul>
                
            </div>
            <img id="imagen" height="250" width="240" src="images/blason.png"/>
            
          </nav>
        	
            <!--TERMINA SIDEBAR DE LA IZQUIERDA-->
            <!--EMPIEZA EL RECORTADO DE PAGINA-->
            <div id="page-wrapper">
                <!--TERMINA EL RECORTADO DE PAGINA-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title"><img  src="images/logopeque.png"/></div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="main.php">SARSS</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="main.php">Inicio</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Inicio</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
		  <!--  Aqui empieza el cuadro blanco sin usar  -->
	              <div class="page-content">
  	 		          <div id="tab-general">
  	                    <div id="sum_box" class="row mbl"></div>
                         
			
                            <div class="col-lg-8">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">

                                          <p align="center"><h1 align="center">!Bienvenidos!</h1></p>
                                          <p></p>
                                          <p><h4>Estas en el Sistema Administrativo de Registro Para el Servicio Social.</h4></p>
                                          <p>&nbsp;</p>
                                          <p><h5><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><span class="sr-only">Error:</span> Aquí podrás crear nuevos 																																																																																											eventos, asi como modificarlos y eliminarlos.</h5></p>
                                          <p><h5><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Lo mismo podrás hacer con los usuarios que quieras agregar.</h5></p>
                                          <p><h5><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Podrás consultar los eventos pasados y tambien los actuales.</h5></p>
                                          <p><h5><span class="glyphicon glyphicon-compressed" aria-hidden="true"></span> Tendrás la posibilidad de generar reportes de los asistentes del evento.</h5></p>
                                      </div>
                                    </div>
                                </div>
                            </div>
							<!-- Aqui termina -->
							
                        </div>
                        <div class="row mbl"></div>
                        <div class="row"></div>
                    </div>
                </div>
				
		
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <h5>UACH - Facultad de Ingeniería</h5></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
      </div>
    </div>
    <script src="script/jquery-1.10.2.min.js"></script>
    <script src="script/jquery-migrate-1.2.1.min.js"></script>
    <script src="script/jquery-ui.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/bootstrap-hover-dropdown.js"></script>
    <script src="script/html5shiv.js"></script>
    <script src="script/respond.min.js"></script>
    <script src="script/jquery.metisMenu.js"></script>
    <script src="script/jquery.slimscroll.js"></script>
    <script src="script/jquery.cookie.js"></script>
    <script src="script/icheck.min.js"></script>
    <script src="script/custom.min.js"></script>
    <script src="script/jquery.news-ticker.js"></script>
    <script src="script/jquery.menu.js"></script>
    <script src="script/pace.min.js"></script>
    <script src="script/holder.js"></script>
    <script src="script/responsive-tabs.js"></script>
    <script src="script/jquery.flot.js"></script>
    <script src="script/jquery.flot.categories.js"></script>
    <script src="script/jquery.flot.pie.js"></script>
    <script src="script/jquery.flot.tooltip.js"></script>
    <script src="script/jquery.flot.resize.js"></script>
    <script src="script/jquery.flot.fillbetween.js"></script>
    <script src="script/jquery.flot.stack.js"></script>
    <script src="script/jquery.flot.spline.js"></script>
    <script src="script/zabuto_calendar.min.js"></script>
    <script src="script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="script/highcharts.js"></script>
    <script src="script/data.js"></script>
    <script src="script/drilldown.js"></script>
    <script src="script/exporting.js"></script>
    <script src="script/highcharts-more.js"></script>
    <script src="script/charts-highchart-pie.js"></script>
    <script src="script/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
