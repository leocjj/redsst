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
		
		<title> Red SST - Pol&iacute;tica de manejo de informaci&oacute;n personal.</title>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

        <script 						src='assets/js/funciones.js'></script>
		<script type="text/javascript" 	src="assets/js/jquery.min.js"></script>	


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

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1> Pol&iacute;tica de manejo de informaci&oacute;n personal.</h1>

								<blockquote>
								Encuentra
								</blockquote>
								
							</header>
							<a href="#" onclick="javascript:window.close()">Cerrar para volver a la p&aacute;gina anterior.</a>
							<section >
								<h2>.</h2>
								
								<div style="line-height:95%;  color:navy; text-align:justify ">
										K&amp;L Consultores S.A.S. es la empresa responsable de las p&aacute;ginas web kylconsultores.com, redsst.com, redsst.com.co y redsst.co.<br/><br/><br/>
<b>Manual de Políticas de Protección de Datos</b><br/><br/>
De conformidad con lo dispuesto en la Ley Estatutaria 1581 de 2012, por la cual se dictan disposiciones generales para la protección de datos personales, sus decretos
reglamentarios y el Decreto 1377 de 2013, que reglamenta parcialmente la mencionada ley, K&amp;L Consultores S.A.S. identificada con NIT 900.920.194-2, con domicilio en la Calle 9 #66b-62 de la ciudad de Santiago de Cali, Colombia, informa a sus clientes, proveedores, trabajadores, terceros y en general a todos los titulares de información de carácter personal, en adelante Grupos de Interés y a todas las personas que hayan facilitado o que en el futuro faciliten sus datos personales, que se establece el presente Manual de Políticas de Protección de Datos con las siguientes clausulas:<br/><br/>
								</div>

							
							</section>
							<a href="#" onclick="javascript:window.close()">Cerrar para volver a la p&aacute;gina anterior.</a>
							
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>