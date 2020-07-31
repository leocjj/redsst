<?php

header( 'X-Frame-Options: SAMEORIGIN' );
/* 	COLOCAR COMENTARIOS ENTRE CÓDIGO PHP PARA OCULTARLO DEL CÓDIGO FUENTE QUE PUEDE VER LA PERSONA.
		Existen otras maneras de poner añadir esta cabecera . Si tenemos Apache pordemos usar el fichero .htaccess, agregando el código que se indica a continuación:
		Header always append X-Frame-Options SAMEORIGIN	*/
	
	echo("		<meta content='text/html; charset=utf-8' http-equiv='Content-Type' />".PHP_EOL);
//AGREGAR SIEMPRE!!!!!!!!!!!!!!!!!!!!!!!
	echo("		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'/>".PHP_EOL);
		
//AGREGAR INFORMACIÓN DE LA PÁGINA
	echo("		<meta charset='UTF-8'/>".PHP_EOL);
	echo("		<meta name='description' content='Red de Seguridad y Salud en el Trabajo - Red SST'/>".PHP_EOL);
	echo("		<meta name='keywords' content='HSE, EHS, SST, Seguridad Industrial, Salud Ocupacional, Seguridad, Salud, Trabajo,'/>".PHP_EOL);
	echo("		<meta name='author' content='www.kylconsultores.com'/>".PHP_EOL);
//ACTUALIZA PAGINA CADA 30 SEGUNDOS
	//echo("	<meta http-equiv='refresh' content='30'/>".PHP_EOL);

//PROTECTOR
	echo("		<meta charset='UTF-8' /> <style>	#protector {  height: 100%; width: 100%; position: absolute; left: 0; top: 0; z-index: 99999999; } </style>".PHP_EOL);
		
//DIV PROTECTOR PARA EVITAR QUE ABRAN LA PÁGINA DESDE OTRO DOMINIO
	echo("		<div id='protector'>  <a href='/' target='_blank'>Go to the site</a>  ".PHP_EOL);
	echo("			<label id='Label1'></label>  </div>".PHP_EOL);
	echo("		<script>  if (top.document.domain == document.domain) { protector.remove(); }  </script>".PHP_EOL);
	echo("		  <!--This text is always visible. But if the page was open inside a document from another domain, the div over it would prevent any actions.".PHP_EOL);
	echo("		  <button onclick='alert(1)'>Click wouldn't work in that case</button>-->".PHP_EOL);

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
				
		// Pedir un password solo para hacer actividad crítica cada vez, NO LOGGEARSE!! Passphrases de 10-128 caracteres, minúscula, mayúscula, numeros y símbolos (3 de 4).
		// transmit Passwords Only Over TLS or Other Strong Transport. Correct Response Example: "Login failed; Invalid userID or password". to lockout accounts for a period of time (e.g., 20 minutes)
		// VALIDATING AN EMAIL:
		// Check for presence of at least one @ symbol in the address. 
		// Ensure the local-part is no longer than 64 octets.
		// Ensure the domain is no longer than 255 octets.
		// Ensure the address is deliverable
		// Email verification links should only satisfy the requirement of verify email address ownership and
		// should not provide the user with an authenticated session (e.g. the user must still authenticate as normal to access the application).
		// Email verification codes must expire after the first use or expire after 8 hours if not used. https://www.owasp.org/index.php/Password_Storage_Cheat_Sheet
		
echo("		<title> Red SST </title>".PHP_EOL);
echo("		<link rel='stylesheet' href='assets/css/main.css' />".PHP_EOL);

?>