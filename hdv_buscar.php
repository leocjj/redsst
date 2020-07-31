<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	
	<head X-Frame-Options: SAMEORIGIN>  <!-- SOLO EN LAS PAGINAS CRITICAS -->
		<?php include 'head.php'; ?>
			
		<!----------------------- FUNCION PARA MOSTRAR / OCULTAR UN ELEMENTO, POR EJEMPLO HACERLO DESPLEGABLE. -------------------------------->
		<script>
		function mostrar(id) {
		  obj = document.getElementById(id);
		  //obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';	//CON ESTA OPCION, EL ESPACIO SE MANTIENE PERO NO SE VE
		  obj.style.display = (obj.style.display == 'none') ? 'block' : 'none';					//CON ESTA OPCION, NO SE CONSERVA EL ESPACIO, SE ABRE ESPACIO AL MOSTRAR
			//obj.style.display = 'none';
			//document.getElementById(uno).style.display = 'block';
		}
		</script>
		<!----------- se debe colocar los siguiente en html -------------------
			<a href="#" onclick="mostrar('divTexto1'); return false;" >Hago clic aca y se ve u oculta EL TEXTO</a>
			<div id="divTexto1" style="visibility:hidden">
				TEXTO A OCULTAL/MOSTRAR
			</div>
			
			style="display: none;"
		-->
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
								<h3>Hojas de vida de profesionales en SST.</h3> Busca profesionales en SST y s&eacute; parte de Red SST.
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
									<?php include 'solicitar_codigo_de_acceso.php'; ?>	<!--ARCHIVO DONDE ESTÃ EL FORMULARIO PARA PEDIR CÃ“DIGO DE ACCESO -->
								<br/>

							
<!-- ------------------------- SEGUNDO PASO ----- BUSCAR HOJAS DE VIDA  --------------------------------------------------------------------------------------->
								<div Style="color:red;"><h3>2) B&uacute;squeda de Hojas de Vida</h3></div>

								<div style="color:navy; text-align:justify ">										
										Debes suministrar tu correo electr&oacute;nico y el c&oacute;digo de acceso recibido para hacer la b&uacute;squeda.<br/><br/>
										
										<form method="post" id="formulario_buscar2" action="" autocomplete="off"> <!--class='contacto' -->
										
												<div><input type='email' name='correo_ingreso2' maxlength="55" placeholder=" Correo electr&oacute;nico registrado (Requerido)" class="email" required/></div>
												<div><input type='text' name='codigo_ingreso2' maxlength="8" placeholder=" C&oacute;digo de acceso  (Requerido)" class="email" required/></div>
												
									            <!---------------------  CAMPOS PARA FILTRAR LA INFORMACION DE BUSQUEDA ------ -->
									            <div class="field half first">
									            	<select name='filtrar_pais'>
														  <option value="Ninguno"> 		* Pa&iacute;s de b&uacute;squeda </option>
														  <option value="Argentina">	Argentina</option>
														  <option value="Bolivia">		Bolivia</option>
														  <option value="Chile">		Chile</option>
												  		  <option value="Colombia">		Colombia</option>
														  <option value="CostaRica">	Costa Rica</option>
														  <option value="Cuba">			Cuba</option>
														  <option value="Ecuador">		Ecuador</option>
														  <option value="ElSalvador">	El Salvador</option>
														  <option value="Espa�a">		Espa&ntilde;a</option>
														  <option value="Guatemala">	Guatemala</option>
														  <option value="Honduras">		Honduras</option>
														  <option value="Mexico">		M&eacute;xico</option>
														  <option value="Nicaragua">	Nicaragua</option>
														  <option value="Panama">		Panam&aacute;</option>
														  <option value="Paraguay">		Paraguay</option>
														  <option value="Peru">			Per&uacute;</option>
														  <option value="Portugal">		Portugal</option>
														  <option value="RepublicaDominicana">Rep&uacute;blica Dominicana</option>
														  <option value="Uruguay">		Uruguay</option>
														  <option value="Venezuela">	Venezuela</option>
													</select></div>

									            <!---------------------  CAMPOS PARA ORDENAR LA INFORMACION DE BUSQUEDA ------ 
									            Seleccione una opciÃ³n para ordenar el resultado por:
									            	<div class="4u 12u$(small)">
														<input type="radio" id="ordenar_por_ciudad"> Ciudad
													</div>
									            	<div class="4u 12u$(small)">
														<input type="radio" id="ordenar_por_nombre"> Nombre
													</div>
									            	<div class="4u 12u$(small)">
														<input type="radio" id="ordenar_por_estudio1"> Estudio
													</div>
												<!--------------------------------------------------------------------------------------------------------->
										            <div >	
										            		<br/><br/><input type='submit' value='Mostrar hojas de vida' class="special" />
										            </div>			
										            <div Style="color:red;" id="respuesta_buscar2">  </div>		<!-- debe ser con ID, no funciona con name  -->
										</form>
										<!--<a href="javascript:alert('hola');">click me</a>-->

										<br/><br/>
								</div>							
								
<!-- ------------------------- FIN DEL FORMULARIO  -------------------------------------------------------------------------------------------------------------------------->
								
								<?php include 'temas_disclaimer.php'; ?>	<!--ARCHIVO DONDE ESTÁ EL DISCLAIMER, DEBE IR AL FINAL DE TODOS LOS FORMULARIOS -->
														
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
		<script src="assets/js/funciones.js"></script>		<!-- FUNCIONES PARA VERIFICACIÃ“N DE FORMULARIOS Y CORREOS -->
		<script type="text/javascript" 	src="assets/js/dinamica.js"></script>		<!-- ARCHIVO PROPIO, DIRIGE CONEXIONES AJAX PARA EJECUTAR ARCHIVOS PHP DINÃMICAMENTE. -->
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>