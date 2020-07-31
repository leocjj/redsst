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
/*		session_start();							// Inicia sesión para este script.
		$token = md5(uniqid(rand(), TRUE));			// Crea un token aleatorio.
		$_SESSION['token'] = $token;				// Almacena el token aleatorio en la variable global _SESSION.
		$_SESSION['token_time'] = time();			// Captura time() en variable global _SESSION.token_time
		$_SESSION['token_page'] = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];			// Captura pagina actual en variable global _SESSION.token_pag
		session_write_close();						// Graba variables y cierra sesión de este script.
*/
		?>
		
		<title> Red SST - Ingresar evento</title>
		
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
			<div id="wrapper">

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
								<h1>INGRESAR EVENTOS<br/>Seguridad y Salud en el Trabajo - SST  </h1>

								<blockquote>
									<b>Eventos profesionales especializados en SST.</b><br/>
									Informa sobre tu evento especializado en SST <b>en solo 3 pasos</b> y se parte de Red SST.
								</blockquote>
								
								<section>
									
									
								</section> 
							</header>
							
							<section >
							
<!-- ------------------------- PRIMER PASO ----- GUARDAR SOLICITAR CÓDIGO DE ACCESO --------------------------------------------------------------------------------------->
								<div Style="color:red;"><h2>1) Solicitud de c&oacute;digo de acceso</h2></div>

								<div style="line-height:95%;  color:navy; text-align:justify ">
										Tu evento estar&aacute; vinculado a un correo electr&oacute;nico de contacto del evento. Por lo tanto solo podr&aacute;s ingresar 
										un evento por correo. En caso de necesitar publicar un evento nuevo, se puede usar el mismo correo en cuyo caso se sobreescribir&aacute;
										sobre el evento anterior o utilizar otro correo v&aacute;lido.
										Para evitar la suplantaci&oacute;n debes tener un c&oacute;digo de acceso.
										<u>Si a&uacute;n no tienes uno, no lo recuerdas o quieres cambiarlo</u>, escribe tu correo y 
										da clic en <b><em>Solicitar c&oacute;digo</em></b>.
										Te ser&aacute; enviado un nuevo c&oacute;digo al correo suministrado.
										Recuerda revisar la carpeta de <em>correo no deseado</em> o <em>spam</em><br/><br/><br/>
								</div>								
								<!------------------------------------ ESCRIBIR CORREO ELECTRÓNICO Y SOLICITAR CÓDIGO --------------------------------------------->
								<div style="line-height:95%;  color:navy; text-align:justify ">
										
								</div>
								<form method="post" id="formulario_eventos" action="" class='contacto' autocomplete="off">
								            <div >
													<input type='email' name='correo_ingreso' maxlength="55" placeholder=" Correo electr&oacute;nico" class="email"/>
								            </div>
							            <!---------------------  DOS CAMPOS PARA QUE LA PERSONA INGRESE UN CÓDIGO ALEATORIO. EVITAR BOTS ------ -->
							            <div class="field half first">	
												<input type="text" name='codigo_aleatorio' value=<?php echo rand(0,999); ?> readonly/>
							            </div>
							            <div class="field half">
												<input type='text' name='codigo_ingresado' maxlength="3" placeholder="Digite el pin del campo anterior" class='nombre'/>
							            </div>
										<!--------------------------------------------------------------------------------------------------------->					            
								            <div >	
								            		<br/><input type='submit' value='Solicitar c&oacute;digo' class="special" />
								            </div>			
								            <div Style="color:red;" id="respuesta_eventos">  </div>		<!-- debe ser con ID, no funciona con name  -->
								</form>

								<!--<hr style="color: #0056b2;" align="center" noshade="noshade" size="2" width="80%" />
								javascript:window.open('https://www.google.es','','toolbar=yes');void 0
								-->
								<br/><br/>

<!-- ------------------------- SEGUNDO PASO ----- INGRESAR DATOS DEL EVENTO ----------------------------------------------------------------------------------------------->
								<!--------------------- INGRESAR CORREO, CÓDIGO VÁLIDO Y EVENTO. SE VERIFICAN EN EL ARCHIVO procesar_eventos2.php  -------------->	
								<div Style="color:red;"><h2>2) Ingreso de datos del evento</h2></div>
								<div Style="color:blue;"><h3>Tener en cuenta los campos que son requeridos (obligatorios)</h3></div>
								Utilizar solo caracteres alfanum&eacute;ricos y signos de puntuaci&oacute;n. Otros s&iacute;mbolos ser&aacute;n omitidos.<br/><br/>
								
								<form method="post" id="formulario_eventos2" action="" class='contacto' autocomplete="off">
<div><input type='email' name='correo_ingreso2' maxlength="55" placeholder=" Correo electr&oacute;nico (Requerido)" class="email" required/></div>
<div><input type='text' name='codigo_ingreso2' maxlength="8" placeholder=" C&oacute;digo de acceso enviado por correo (Requerido) " class="nombre" required/></div>
<div><select name='tipo'>
		  <option value="Ninguno"> Seleccionar tipo de evento (Requerido)</option>
		  <option value="Curso">Curso</option>
		  <option value="Seminario">Seminario</option>
		  <option value="Taller">Taller</option>
		  <option value="Capacitacion">Capacitaci&oacute;n</option>
		  <option value="Entrenamiento">Entrenamiento</option>
		  <option value="Conferencia">Conferencia</option>
  		  <option value="Congreso">Congreso</option>
  		  <option value="Encuentro">Encuentro</option>
   		  <option value="Simposio">Simposio</option>
		  <option value="Diplomado">Diplomado</option>
  		  <option value="Diplomado">Otro</option></select></div>
<div><input type='text' name='nombre' maxlength="250" placeholder=" Nombre y la descripci&oacute;n del evento (Requerido)" class="nombre" required/></div>
<div><input type='text' name='organiza' maxlength="250" placeholder=" Nombre(s) organizador(es) y/o patrocinador(es) (Requerido)" class="nombre" required/></div>
<div><input type='number' name='duracion' min="1" max="250" placeholder=" Horas duraci&oacute;n (Requerido)" required/></div>
<div ><select name='pais'>
		  <option value="Ninguno">Seleccionar pa&iacute;s (Requerido)</option>
		  <option value="Argentina">Argentina</option>
		  <option value="Bolivia">Bolivia</option>
		  <option value="Chile">Chile</option>
  		  <option value="Colombia">Colombia</option>
		  <option value="CostaRica">Costa Rica</option>
		  <option value="Cuba">Cuba</option>
		  <option value="Ecuador">Ecuador</option>
		  <option value="ElSalvador">El Salvador</option>
		  <option value="España">España</option>
		  <option value="Guatemala">Guatemala</option>
		  <option value="Honduras">Honduras</option>
		  <option value="Mexico">M&eacute;xico</option>
		  <option value="Nicaragua">Nicaragua</option>
		  <option value="Panama">Panam&aacute;</option>
		  <option value="Paraguay">Paraguay</option>
		  <option value="Peru">Per&uacute;</option>
		  <option value="Portugal">Portugal</option>
		  <option value="ReplublicaDominicana">Repl&uacute;blica Dominicana</option>
		  <option value="Uruguay">Uruguay</option>
		  <option value="Venezuela">Venezuela</option>	 </select></div>
<div><input type='text' name='ciudad'   maxlength="30" placeholder=" Ciudad (Requerido)" required/></div>
<div><input type='text' name='lugar'    maxlength="250" placeholder=" Lugar del evento (Requerido)" required/></div>
<div><input type='date' name='inicio' required/></div>	<!-- VERIFICAR --------------------------------------------------------------------------------------------->
<div><input type='text' name='hora'     maxlength="250" placeholder=" Hora de inicio u horario del evento (Requerido)" required /></div>
<div><input type="text" name='contacto' maxlength="250" placeholder=" Nombre de la persona de contacto (Requerido)" required/></div>
<div><input type='text' name='telefono' maxlength="20" placeholder=" Tel&eacute;fono de contacto (Requerido)" required/></div>
<div><input type='text' name='link'     maxlength="250" placeholder=" Link del evento (opcional) " /></div>
<br><br><b>Perfil del evento, temas de inter&eacute;s y otros aspectos (m&aacute;ximo 250 caracteres):</b><br>
<div class="12u$"><textarea name="otros" maxlength="250" id="demo-message" placeholder=" M&aacute;ximo 250 caracteres (opcional) " rows="6"></textarea></div>


<!-- ------------------------- TERCER PASO ----- GUARDAR HOJA DE VIDA ---------------------------------------------------------------------------------------------------->
										<br/><br/><br/>
							            <div Style="color:red;"><h2>3) Guardar datos del evento</h2></div>
										<div style="line-height:95%; color:navy; text-align:justify ">
												Se realizar&aacute; una verificaci&oacute;n del c&oacute;digo de acceso suministrado y se guardar&aacute; 
												toda la informaci&oacute;n en nuestra base de datos para su tratamiento.<br/><br/>

												<div class="6u 12u$(small)">
														<input type="checkbox" id="autorizohabeasdata" name="autorizohabeasdata">
														<label for="autorizohabeasdata">
															Autorizo el tratamiento de mis datos personales y demás información suministrada, de acuerdo con la
															<a href="habeas_data.pdf" target="_blank"><b>Pol&iacute;tica de manejo de informaci&oacute;n personal.</b></a><br/>
															<br/><br/>
														</label>
												</div>
										</div>								
							            <div >	
							            		<br/><input type='submit' name="guardar" value='Guardar' class="special"/>
							            		<!--CÓDIGO SI SE QUIERE EVITAR QUE AL DAR ENTER SE SUBMITA EL FORMULARIO. PERO REFRESCA LA PÁGINA, NO FUNCIONA CON AJAX.
							            		<form name="formulario_ingreso2" method="post" action="script.php">-->
												<!--<input type="button" name="guardar" value="Guardar" class="special" onclick="formulario_ingreso2.submit()">-->
							            		
							            </div>			
							            <div Style="color:red;" id="respuesta_eventos2">  </div>		<!-- debe ser con ID, no funciona con name  -->
								</form>
<!-- ------------------------- FIN DEL FORMULARIO  -------------------------------------------------------------------------------------------------------------------------->
								
								<div style="line-height:95%; color:navy; text-align:justify ">
										<br/><b>Nota:</b> esta p&aacute;gina se encuentra en continuo desarrollo.
										Si deseas modificar los datos del evento despu&eacute;s de ingresarlo por primera vez,
										se deben ingresar nuevamente los datos como la primera vez y los datos anteriores se sobreescribir&aacute;n.
										Si deseas eliminar toda tu información de nuestra base de datos, escr&iacute;benos
										un correo a habeasdata @kylconsultores.com con el asunto ELIMINAR DATOS.
								</div>
						
			<!--			
				<form name="formulario" action="cualquiera.html" method="post">
					Acepto las condiciones <input type="check" value="acepto" onclick="document.formulario.enviar.disabled=!document.formulario.enviar.disabled"><br />
					<input type="submit" name="enviar" value="Enviar" disabled>
				</form>
			
	    		https://www.w3schools.com/html/html_form_elements.asp
	    		https://www.w3schools.com/js/js_regexp.asp
	    		
	    		<input type="reset">
	    		<input type="text" name="firstname" value="John" readonly>
	    		
	    		<input type="date" name="bday">
	    		<input type="date" name="bday" min="2000-01-02"><br>
	    		<input type="month">
	    		<input type="number" name="quantity" min="1" max="5">
	    		<input type="number" name="points" min="0" max="100" step="10" value="30">
	    		<input type="range" name="points" min="0" max="10">
	    		
	    		Attribute 	Description
				disabled 	Specifies that an input field should be disabled
				max 		Specifies the maximum value for an input field
				maxlength 	Specifies the maximum number of character for an input field
				min 		Specifies the minimum value for an input field
				pattern 	Specifies a regular expression to check the input value against
				readonly 	Specifies that an input field is read only (cannot be changed)
				required 	Specifies that an input field is required (must be filled out)
				size 		Specifies the width (in characters) of an input field
				step 			Specifies the legal number intervals for an input field
				value 	Specifies the default value for an input field
				
				input type="text" name="country_code" pattern="[A-Za-z]{3}" title="Three letter country code">
	    		 <input type="text" name="fname" placeholder="First name"> 
	    		 <input type="text" name="usrname" required>
	    		
	    	-->
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