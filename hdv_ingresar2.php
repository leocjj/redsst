<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

	<head X-Frame-Options: SAMEORIGIN>  <!-- SOLO EN LAS PÁGINAS CRÍTICAS -->
		<?php include 'head.php'; ?>
	</head>
	
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header   -->
				<?php include 'header.php'; ?>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-12 col-12-medium">
								<h3>Hojas de vida de profesionales especializados en SST.</h3> Ingresa tu hoja de vida <b>en solo 3 pasos</b> y s&eacute; parte de Red SST.
							</div>
						</div>
					</div>
				</div>
			<br/>
			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
					
						<div class="row gtr-200">
							<div class="col-12 col-12-medium">
							
								<!-- Content -->
									<div id="content">
										<section class="last">
											
											
<!-- ------------------------- PRIMER PASO ----- GUARDAR SOLICITAR CODIGO DE ACCESO --------------------------------------------------------------------------------------->
								<div Style="color:red;"><h3>1) Solicitud de c&oacute;digo de acceso</h3></div>

								<div style=" color:navy; text-align:justify ">
										Tu hoja de vida estar&aacute; vinculada a un correo electr&oacute;nico. Para evitar la suplantaci&oacute;n debes tener un c&oacute;digo
										de acceso. Si a&uacute;n no tienes uno, no lo recuerdas o quieres cambiarlo, escribe tu correo y da clic en el bot&oacute;n
										<b><em>Solicitar c&oacute;digo</em></b>. Te ser&aacute; enviado un nuevo c&oacute;digo. Recuerda revisar la carpeta de <em>
										correo no deseado</em> o <em>spam</em><br/><br/>
								</div>								
								<!------------------------------------ ESCRIBIR CORREO ELECTRÃ“NICO Y SOLICITAR CÃ“DIGO --------------------------------------------->
								<div style="line-height:95%;  color:navy; text-align:justify ">
										
								</div>
								<form method="post" id="formulario_ingreso" action="" class='contacto' autocomplete="off">
								            <div >
													<input type='email' name='correo_ingreso' maxlength="55" placeholder=" Correo electr&oacute;nico" class="email"/>
								            </div>
							            <!---------------------  DOS CAMPOS PARA QUE LA PERSONA INGRESE UN CÃ“DIGO ALEATORIO. EVITAR BOTS ------ -->
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
								            <div Style="color:red;" id="respuesta_ingreso">  </div>		<!-- debe ser con ID, no funciona con name  -->
								</form>

								<!--<hr style="color: #0056b2;" align="center" noshade="noshade" size="2" width="80%" />
								javascript:window.open('https://www.google.es','','toolbar=yes');void 0
								-->
								<br/>

<!-- ------------------------- SEGUNDO PASO ----- INGRESAR DATOS PERSONALES ----------------------------------------------------------------------------------------------->
								<!--------------------- INGRESAR CORREO, CÃ“DIGO VÃLIDO Y HOJA DE VIDA. SE VERIFICAN EN EL ARCHIVO procesar_ingreso2.php  -------------->	
								<div Style="color:red;"><h3>2) Ingreso de datos personales</h3></div>
										Utilizar solo caracteres alfanum&eacute;ricos y signos de puntuaci&oacute;n. Otros s&iacute;mbolos ser&aacute;n omitidos.
								
								<form method="post" id="formulario_ingreso2" action="" class='contacto' autocomplete="on">
										<?php include 'hdv_formulario.php'; ?>

<!-- ------------------------- TERCER PASO ----- GUARDAR HOJA DE VIDA ---------------------------------------------------------------------------------------------------->
										<br/><br/>
							            <div Style="color:red;"><h3>3) Guardar hoja de vida</h3></div>
										<div style="color:navy; text-align:justify ">
												Se realizar&aacute; una verificaci&oacute;n del c&oacute;digo de acceso suministrado y se guardar&aacute; toda la 
												informaci&oacute;n en nuestra base de datospara su tratamiento.<br/><br/>

												<div class="6u 12u$(small)">
														<input type="checkbox" id="autorizohabeasdata" name="autorizohabeasdata">
														<label for="autorizohabeasdata">
															Autorizo el tratamiento de mis datos personales de acuerdo con la <a href="habeas_data.pdf" target="_blank">
															<b>Pol&iacute;tica de manejo de informaci&oacute;n personal.</b></a><br/>
															<br/>
														</label>
												</div>
												<div class="6u 12u$(small)">
														<input type="checkbox" id="mayordeedad" name="mayordeedad">
														<label for="mayordeedad">
															Certifico que soy mayor de 18 a&ntilde;os.<br/>
															<br/>
														</label>
												</div>
										</div>								
							            <div >	
							            		<br/><input type='submit' name="guardar" value='Guardar' class="special"/>
							            		<!--CÃ“DIGO SI SE QUIERE EVITAR QUE AL DAR ENTER SE SUBMITA EL FORMULARIO. PERO REFRESCA LA PÃGINA, NO FUNCIONA CON AJAX.
							            		<form name="formulario_ingreso2" method="post" action="script.php">-->
												<!--<input type="button" name="guardar" value="Guardar" class="special" onclick="formulario_ingreso2.submit()">-->
							            		
							            </div>			
							            <div Style="color:red;" id="respuesta_ingreso2">  </div>		<!-- debe ser con ID, no funciona con name  -->
								</form>
<!-- ------------------------- FIN DEL FORMULARIO  -------------------------------------------------------------------------------------------------------------------------->
								
								<div style="line-height:95%; color:navy; text-align:justify ">
										<br/><b>Nota:</b> esta p&aacute;gina se encuentra en continuo desarrollo. Si deseas modificar la hoja de vida despu&eacute;s de 
										ingresarla por primera vez, se deben ingresar nuevamente los datos como la primera vez y los datos anteriores se sobreescribir&aacute;n.
										Si deseas eliminar toda tu informaci&oacute;n de nuestra base de datos, escr&iacute;benos un correo electr&oacute;nico 
										a habeasdata@kylconsultores.com desde el correo que tienes registrado en nuestra p&aacute;gina con el asunto ELIMINAR DATOS.
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
						</div>						
					</div>
				</div>

			<!-- Footer -->
				<?php include 'footer.php'; ?>

		</div>

		<!-- Scripts FUNCIONAN BIEN SI VAN AL FINAL ANTES DE /BODY -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/funciones.js"></script>		<!-- FUNCIONES PARA VERIFICACIÓN DE FORMULARIOS Y CORREOS -->
		<script type="text/javascript" 	src="assets/js/dinamica.js"></script>		<!-- ARCHIVO PROPIO, DIRIGE CONEXIONES AJAX PARA EJECUTAR ARCHIVOS PHP DINÁMICAMENTE. -->
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>