<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	
	<head X-Frame-Options: SAMEORIGIN>  <!-- SOLO EN LAS PÁGINAS CRÍTICAS -->

		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<!-- AGREGAR INFORMACIÓN DE LA PÁGINA -->
		<meta charset="UTF-8"/>
		<meta name="description" content="Red de Seguridad y Salud en el Trabajo - Red SST"/>
		<meta name="keywords" content="HSE, EHS, SST, Seguridad Industrial, Salud Ocupacional, Seguridad, Salud, Trabajo,"/>
		<meta name="author" content="kylconsultores.com"/>
		<!-- <meta http-equiv="refresh" content="30"/> -->		<!--ACTUALIZA PAGINA CADA 30 SEGUNDOS-->

		<!-- PROTECTOR -->
		<meta charset="UTF-8" /> <style>	#protector {  height: 100%; width: 100%; position: absolute; left: 0; top: 0; z-index: 99999999; } </style>
		
		<!-- DIV PROTECTOR PARA EVITAR QUE ABRAN LA PÁGINA DESDE OTRO DOMINIO -->
		<div id="protector">  <a href="/" target="_blank">Go to the site</a>  
			<label id="Label1"></label>  </div>
		<script>  if (top.document.domain == document.domain) { protector.remove(); }  </script>

		<?php		
		//The first: to assign a strong password to the DBA account.
		// //Second, the DBA should create user accounts and assign these users to specific activities or databases. 
		//For example, if a user account has been set up for the Users database, which didn't have access to the Master database,
		// Se puede verificar que la vulnerabilidad existe insertando la sentencia   ../login.php& script alert("XSS") /script
		
		// Utilizar token por cada usuario que abre la página (ver código al final).
		session_start();							// Inicia sesión para este script.
		$token = md5(uniqid(rand(), TRUE));			// Crea un token aleatorio.
		$_SESSION['token'] = $token;				// Almacena el token aleatorio en la variable global _SESSION.
		$_SESSION['token_time'] = time();			// Captura time() en variable global _SESSION.token_time
		$_SESSION['token_page'] = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];			// Captura pagina actual en variable global _SESSION.token_pag
		session_write_close();						// Graba variables y cierra sesión de este script.
		?>
		
		<title> Red SST </title>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
        
	</head>

	
	<body class="is-preload homepage" onload="iniayuda()">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<a href="index.php"> <img src="images/logos/logo_small.png"> </a>
							<div id="logo">
								<h1><a href="index.php"> Seguridad y Salud en el Trabajo - SST</a></h1><br>
								<span></span>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="index.php"> Inicio</a></li>
									<li>
										<a href="hdv.php">Profesionales</a>
										<ul>
											<li><a href="hdv_ingresar.php">Ingresar Hoja de Vida</a></li>
											<li><a href="hdv_buscar.php">Buscar Hoja de Vida</a></li>
											<li><a href="hdv.php">Actualizar Hoja de Vida</a></li>
										</ul>
									</li>

									<li>
										<a href="eventos.php">Eventos</a>
										<ul>
											<li><a href="eventos_ingresar.php">Ingresar Evento SST</a></li>
											<li><a href="eventos_buscar.php">Buscar Evento SST</a></li>
											<li><a href="eventos.php">Actualizar Evento SST</a></li>
										</ul>
									</li>
									<li><a href="productos.php">Productos y servicios</a></li>
									<li><a href="publicaciones.php">Contenidos</a></li>
								</ul>
							</nav>

					</header>
				</div>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="image fit" >  <!-- class="image fit"  -->
										<h3>Plaza de Red SST</h3>
						<a href="plaza2.php" target="_blank"><img usemap="#plaza" name=mapa id=mapa  style="border:1px black dotted" src="images/plazaRedSST3.png" alt="Plaza Red SST" \></a>
					</div>
				</div>


			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Profesionales</h3>
										<ul class="style2">
											<li><a href="#">Ingresar hoja de vida</a></li>
											<li><a href="#">Buscar hoja de vida</a></li>
											<li><a href="#">Actualizar hoja de vida</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Eventos</h3>
										<ul class="style2">
											<li><a href="#">Ingresar evento</a></li>
											<li><a href="#">Buscar evento</a></li>
											<li><a href="#">Actualizar evento</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Productos y servicios</h3>
										<ul class="style2">
											<li><a href="#">Encuentra aqu&iacute; productos y servicios relacionados con SST</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Contact -->
									<section class="widget contact last">
										<h3>Cont&aacute;ctanos</h3>
										<ul>
											<li><a href="#" class="icon fa-linkedin"><span class="label">
											Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">
											Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">
											Instagram</span></a></li>
											<li><a href="https://web.whatsapp.com/573165237608" class="icon fa-whatsapp" target="_blank"><span class="label">
											Whatsapp</span></a></li>
										</ul>
										<p>Colombia - Latinoam&eacute;rica<br />
										(+57) 304-100-2450</p>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; <a href="http://www.kylconsultores.com" target="_blank">K&amp;L Consultores S.A.S.</a></li><li>
										Design: <a href="http://html5up.net">
										HTML5 UP</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->


			<script src='assets/js/funciones.js'></script>		<!-- FUNCIONES PARA VERIFICACIÓN DE FORMULARIOS Y CORREOS -->
			<script type="text/javascript" 	src="assets/js/dinamica.js"></script>		<!-- ARCHIVO PROPIO, DIRIGE CONEXIONES AJAX PARA EJECUTAR ARCHIVOS PHP DINÁMICAMENTE. -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/ayuda.js"></script>


<!-- MODIFICAR PORA CADA ÁREA: href, onmouseover, coords
<map name="plaza">	
	<area href="javascript: alert('Uruguay')" onmouseover="mostrarAyuda('0000', 'www.redsst.com')" coords='0,0,60,60' onmousemove="moverAyuda()" onmouseout="ocultarAyuda()" shape='rect'>
</map>
-->

	</body>
</html>