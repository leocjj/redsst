<?php
echo ("<meta content='text/html; charset=utf-8' http-equiv='Content-Type' />".PHP_EOL);
echo ("<meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no' />".PHP_EOL);
		
//AGREGAR INFORMACIÓN DE LA PÁGINA
echo ("	<meta charset='UTF-8'/>".PHP_EOL);
echo ("	<meta name='description' content='Red de Seguridad y Salud en el Trabajo - Red SST'/>".PHP_EOL);
echo ("	<meta name='keywords' content='HSE, EHS, SST, Seguridad Industrial, Salud Ocupacional, Seguridad, Salud, Trabajo,'/>".PHP_EOL);
echo ("	<meta name='author' content='kylconsultores.com'/>".PHP_EOL);
//ACTUALIZA PAGINA CADA 30 SEGUNDOS
//echo ("	<meta http-equiv='refresh' content='30'/>".PHP_EOL);

//PROTECTOR
echo ("	<meta charset='UTF-8' /> <style>	#protector {  height: 100%; width: 100%; position: absolute; left: 0; top: 0; z-index: 99999999; } </style>".PHP_EOL);
		
//DIV PROTECTOR PARA EVITAR QUE ABRAN LA PÁGINA DESDE OTRO DOMINIO
echo ("	<div id='protector'>  <a href='/' target='_blank'>Go to the site</a>  ".PHP_EOL);
echo ("	<label id='Label1'></label>  </div>".PHP_EOL);
echo ("	<script>  if (top.document.domain == document.domain) { protector.remove(); }  </script>".PHP_EOL);

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
		
echo ("	<title> Red SST </title>".PHP_EOL);
		
echo ("	<meta charset='utf-8' />".PHP_EOL);
echo ("	<meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no' />".PHP_EOL);
echo ("	<link rel='stylesheet' href='assets/css/main.css' />".PHP_EOL);

//Scripts
echo ("	<script src='assets/js/funciones.js'></script>".PHP_EOL);	//FUNCIONES PARA VERIFICACIÃ“N DE FORMULARIOS Y CORREOS
echo ("	<script type='text/javascript' src='assets/js/dinamica.js'></script>".PHP_EOL);	//ARCHIVO PROPIO, DIRIGE CONEXIONES AJAX PARA EJECUTAR ARCHIVOS PHP DINÃMICAMENTE.

//echo ("	<script src='assets/js/jquery.min.js'></script>".PHP_EOL);	
//echo ("	<script src='assets/js/jquery.dropotron.min.js'></script>".PHP_EOL);
//echo ("	<script src='assets/js/browser.min.js'></script>".PHP_EOL);
//echo ("	<script src='assets/js/breakpoints.min.js'></script>".PHP_EOL);
//echo ("	<script src='assets/js/util.js'></script>".PHP_EOL);
//echo ("	<script src='assets/js/main.js'></script>".PHP_EOL);
        
?>