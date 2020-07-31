<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head X-Frame-Options: SAMEORIGIN>  <!-- SOLO EN LAS PÁGINAS CRÍTICAS -->

		<?php header( 'X-Frame-Options: SAMEORIGIN' ); ?>
		<?php /* 	COLOCAR COMENTARIOS ENTRE CÓDIGO PHP PARA OCULTARLO DEL CÓDIGO FUENTE QUE PUEDE VER LA PERSONA.
		Existen otras maneras de poner añadir esta cabecera . Si tenemos Apache pordemos usar el fichero .htaccess, agregando el código que se indica a continuación:
		Header always append X-Frame-Options SAMEORIGIN	*/?>
	
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />  <!--AGREGAR SIEMPRE!!!!!!!!!!!!!!!!!!!!!!!-->
		
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
		  <!--This text is always visible. But if the page was open inside a document from another domain, the div over it would prevent any actions.
		  <button onclick="alert(1)">Click wouldn't work in that case</button>-->

		<?php
		// Se puede verificar que la vulnerabilidad existe insertando la sentencia   ../login.php& script alert("XSS") /script
		
		// Utilizar token por cada usuario que abre la página (ver código al final).
		session_start();							// Inicia sesión para este script.
		$token = md5(uniqid(rand(), TRUE));			// Crea un token aleatorio.
		$_SESSION['token'] = $token;				// Almacena el token aleatorio en la variable global _SESSION.
		$_SESSION['token_time'] = time();			// Captura time() en variable global _SESSION.token_time
		$_SESSION['token_page'] = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];			// Captura pagina actual en variable global _SESSION.token_pag
		session_write_close();						// Graba variables y cierra sesión de este script.

		?>
		
		<title> Red SST - Publicaciones</title>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

        <script 						src='assets/js/funciones.js'></script>
		<script type="text/javascript" 	src="assets/js/jquery.min.js"></script>
		<script type="text/javascript"	src="assets/js/dinamica.js"></script>	
		
		
		<!-- Global site tag (gtag.js) - Google AdWords: 951115790 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-951115790"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'AW-951115790');
		</script>
		
	</head>
	
	<body>

		<!-- Wrapper -->
			<div id="wrapper"> <!--background image url('images/index_wall.jpg')-->

				<!-- Header -->
					<header id="header">
						<div class="inner">
							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="title">Red SST</span>
									<span class="symbol"><img src="images/logos/logo_small.png" alt="" /></span>
								</a>
							 
							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Men&uacute;</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="hdv.php">Hojas de vida</a></li>
							<!--<li><a href="vacantes.php">Buscar hoja de vida</a></li>-->
							<li><a href="eventos.php">Eventos</a></li>
							<li><a href="productos.php">Productos</a></li>
							<li><a href="publicaciones.php">Publicaciones</a></li>
							<!--<li><a href="pysp.php">Productos y servicios</a></li>-->
							<li><a href="contacto.php">Contacto</a></li>
							<li><a href="acercade.php">Acerca de Red SST</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>PUBLICACIONES<br/>Seguridad y Salud en el Trabajo - SST</h1>

								<blockquote>
									<b>Publicaciones de inter&eacute;s profesional.</b><br/>
									Cont&aacute;ctanos, env&iacute;anos tu publicaci&oacute;n y se parte de Red SST.
								</blockquote>
								
								<section>
									
									
								</section> 
							</header>
							
							<h2>Publicaciones</h2>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="Informe ejecutivo" />
									</span>
									<a href="post/post01.pptx">
										<h2>Informe ejecutivo en una diapositiva<br/></h2>
										<div class="content">
											<p>Estatus general de un proyecto en una sola diapositiva. Instrucciones: dar clic aqu&iacute;, descargar el archivo, dar clic derecho sobre el archivo, seleccionar opci&oacute;n propiedades, luego opci&oacute;n desbloquear, presionar aceptar y luego abrir el archivo.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="post/post02.pdf" target="_blank" >
										<h2>C&oacute;mo calcular estad&iacute;stica (pero f&aacute;cilmente!) la duraci&oacute;n de una actividad.<br/><div Style="color:green;">  ¡Nuevo!</div></h2>
										<div class="content">
											<p>Calcule la duraci&oacute;n de una actividad con la confiabilidad deseada en solo tres pasos.  </p>
										</div>
									</a>
								</article>

								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="index.php">
										<h2>Metodolog&iacute;a de gesti&oacute;n de proyectos de SST<br/><div Style="color:orange;">  ¡Pr&oacute;ximamente!</div></h2>
										<div class="content">
											<p>Enfoque de la metodolog&iacute;a de gesti&oacute;n de proyectos a proyectos de Seguridad y Salud en el Trabajo.</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="index.php">
										<h2>Resumen de bolsillo: gesti&oacute;n de proyectos con enfoque PMI.<br/><div Style="color:orange;">  ¡Pr&oacute;ximamente!</div></h2>
										<div class="content">
											<p>Resumen de una p&aacute;gina para la gesti&oacute;n de proyectos con base en el est&aacute;ndar PMBoK del PMI.</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<a href="index.php">
										<h2>Identificaci&oacute;n de peligros - Enfoque por energ&iacute;as.<br/><div Style="color:orange;">  ¡Pr&oacute;ximamente!</div></h2>
										<div class="content">
											<p>Identificaci&oacute;n de peligros desde la perspectiva de la F&iacute;sica, enfoque energ&eacute;tico.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<a href="index.php">
										<h2>Diplomado Ingeniería de la Seguridad en el Trabajo.<br/><div Style="color:orange;">  ¡Pr&oacute;ximamente!</div></h2>
										<div class="content">
											<p>Fundamentos de ingeniería (para no ingenieros) aplicados a la prevención de riesgos en el trabajo.</p>
										</div>
									</a>
								</article>


							</section>

							
													
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								
							</section>
							<section>
								<h2>Síguenos</h2>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<!--<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>-->
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; <a href="http://www.kylconsultores.com" target="_blank">K&amp;L Consultores SAS</a>. Todos los derechos reservados</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>