/*	
	1. RECIBE LOS EVENTOS SUBMIT DE #formulario O #formulario2, SON ID DE TAGS <FORM>
	2. EVITA QUE SE RECARGUE LA PÁGINA
	3. LUEGO ENVÍA UNA SOLICITUD AJAX AL SERVIDOR PARA EJECUTAR UN ARCHIVO PHP EN EL SERVIDOR.
	4. RECIBE EL RESULTADO DEL ARCHIVO PHP EN LA VARIABLE data EN EL BLOQUE   success: function(data){
	5. MUESTRA DINÁMICAMENTE EL RESULTADO EN PAGINA HTML, EN ETIQUETA <DIV> QUE TIENE ID #respuesta MEDIANTE EL BLOQUE    $("#respuesta").html(data);

	Instrucciones de uso:
	1. Copiar tantos bloques:  $('#formulario').submit(   como sea necesario, uno para cada formulario, colocar el nombre del formulario.
	2. Crear un archivo *.php que ejecutará el formulario, por ejemplo, "procesar_datos1.php".
	3. Colocar etiquetas #formulario, #formulario2, etc a cada <FORM>.
	4. Colocar etiquetas #respuesta, #respuesta2, etc a cada <DIV> utilizado para mostrar el resultado del formulario
	
	Ejemplos del archivo php que ejecutará el formulario:
	//	<?php mail("correoque@recibira.com", $_POST['asunto'], $_POST['mensaje']); ?>
	//	<?php $resultado = $_POST['valorCaja1'] + $_POST['valorCaja2']; 
	//		echo $resultado; //haciendo este echo estas respondiendo la solicitud ajax.

	// FORMULARIO TIPO
		<form method="post" id="formulario" action="" class='contacto'>
	            <div class="field half first">	
						<input type='text' name='nombre' maxlength="55" placeholder=" Nombre " class='nombre' />
	            </div>
	            <div class="field half">
						<input type='email' name='correo' maxlength="55" placeholder=" Correo electr&oacute;nico" class="email"/>
	            </div>
	            <div >	
	            		<textarea rows='6' name='mensaje' placeholder=" Mensaje"></textarea>
	            </div>
	            <div>	
	            		<br/><input type='submit' value='Enviar Mensaje' class="special" />
	            </div>
				<div>	
	            		<br/><input type='hidden' name="tipo_formulario" value="contacto"/>
	            </div>

	            <div Style="color:red;" id="respuesta">  </div>		<!-- debe ser con ID, no funciona con name  -->
		</form>
	
	<!--		
		// OTRA FORMA--- 		UTILIZAR PARA HACER LOS LINKS DEL MENÚ DINÁMICOS Y SOLO CAMBIAR UN ARCHIVO EN VEZ DE CAMBIAR TODAS LAS PÁGINAS -------------------
		//	<script>
		//		function realizaProceso(valorCaja1, valorCaja2){
		//	        var parametros = {
		//              "valorCaja1" : valorCaja1,
		//              "valorCaja2" : valorCaja2
		//      };
		//      $.ajax({
		//<input type="button" href="javascript:;" onclick="realizaProceso($('#valor1').val(), $('#valor2').val());return false;" value="Calcula"/>
		
		// Ejemplos del archivo php
		//	 mail("correoque@recibira.com", $_POST['asunto'], $_POST['mensaje']); 
		//	 $resultado = $_POST['valorCaja1'] + $_POST['valorCaja2']; 
		//		echo $resultado; //haciendo este echo estas respondiendo la solicitud ajax
		//	
	-->

	CREADO POR kylconsultores.com para redsst.com. 13-may-2018.
*/


$(document).ready(
					function(){

//---------CADA VEZ QUE SE MODIFIQUE ESTE ARCHIVO SE DEBEN BORRAR DATOS Y CACHE DEL NAVEGADOR PARA PODER QUE CARGUE NUEVAMENTE ESTE ARCHIVO DEL SERVIDOR -----------------
							$('#formulario_contacto').submit(		//#formulario es el id del tag <form>
									function(event){
											event.preventDefault();								//previene la recarga de la página
											var url = "process/procesar_contacto.php";			//ARCHIVO QUE RECIBE PETICIÓN Y RETORNA RESPUESTA
											$.ajax({
														type: 'POST',														
														//ARCHIVO QUE RECIBE PETICIÓN, LA PROCESA EN SERVIDOR Y DEVUELVE UNA RESPUESTA HTML
														//url: $(this).attr('action'),			//$(this).attr(‘action’), referencia al atributo action del formulario.
														url: url,
														data: $(this).serialize(),
														beforeSend: function () {
																$("#respuesta_contacto").html("Procesando, espere por favor...");
														},
														success: function(data){					// Data es lo RECIBIDO del archivo php después de ejecutarse en servidor.
															$("#respuesta_contacto").html(data);	// #respuesta es el id de un taG <div> donde se escribirá dinámicamente.
															//alert(data);
															//\u00F3  E1  E9 ED F3 FA
														},
														error: function(data){
															$("#respuesta_contacto").html("Error (3) al enviar el mensaje, actualice la p&aacute;gina e int&eacute;ntelo nuevamente. Si el error persiste, por favor borre las cookies y archivos temporales de su navegador e int&eacute;ntelo de nuevo");
														}
											});
											//return false;
									} 
							);
//---------CADA VEZ QUE SE MODIFIQUE ESTE ARCHIVO SE DEBEN BORRAR DATOS Y CACHE DEL NAVEGADOR PARA PODER QUE CARGUE NUEVAMENTE ESTE ARCHIVO DEL SERVIDOR -----------------
							$('#formulario_suscribirse').submit(										// --- CAMBIAR ---- 
									function(event){
											event.preventDefault();
											var url = "process/procesar_suscribirse.php";				// --- CREAR ESTE ARCHIVO E INCLUIR CÓDIGO PARA ESTE FORMULARIO---- 
											$.ajax({
														type: 'POST',
														url: url,
														data: $(this).serialize(),
														beforeSend: function () {
																$("#respuesta_suscribirse").html("Procesando, espere por favor...");		// --- CAMBIAR ---- 
														},
														success: function(data){
															$("#respuesta_suscribirse").html(data);		// --- CAMBIAR ----
															//alert(data);
															//\u00F3  E1  E9 ED F3 FA
														},
														error: function(data){
															$("#respuesta_suscribirse").html("Error (3) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente. Si el error persiste, por favor borre las cookies y archivos temporales de su navegador e int&eacute;ntelo de nuevo");
														}
											}); 
											//return false;
									}
							);
							
//---------CADA VEZ QUE SE MODIFIQUE ESTE ARCHIVO SE DEBEN BORRAR DATOS Y CACHE DEL NAVEGADOR PARA PODER QUE CARGUE NUEVAMENTE ESTE ARCHIVO DEL SERVIDOR -----------------

							//-------- USADO EN solicitar_codigo_de_ingreso.php  PARA EL FORMULARIO QUE PERMITE SOLICITAR CÓDIGO DE ACCESO POR CORREO -------------
							$('#formulario_ingreso').submit(										// --- CAMBIAR ---- 
									function(event){
											event.preventDefault();
											var url = "process/procesar_ingreso.php";				// --- CREAR ESTE ARCHIVO E INCLUIR CÓDIGO PARA ESTE FORMULARIO---- 
											$.ajax({
														type: 'POST',
														url: url,
														data: $(this).serialize(),
														beforeSend: function () {
																$("#respuesta_ingreso").html("Procesando, espere por favor...");		// --- CAMBIAR ---- 
														},
														success: function(data){
															$("#respuesta_ingreso").html(data);		// --- CAMBIAR ----
															//alert(data);
															//\u00F3  E1  E9 ED F3 FA
														},
														error: function(data){
															$("#respuesta_ingreso").html("Error (3) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente. Si el error persiste, por favor borre las cookies y archivos temporales de su navegador e int&eacute;ntelo de nuevo");
														}
											}); 
											//return false;
									}
							);
							
//---------CADA VEZ QUE SE MODIFIQUE ESTE ARCHIVO SE DEBEN BORRAR DATOS Y CACHE DEL NAVEGADOR PARA PODER QUE CARGUE NUEVAMENTE ESTE ARCHIVO DEL SERVIDOR -----------------
							$('#formulario_ingreso2').submit(										// --- CAMBIAR ---- 
									function(event){
											event.preventDefault();
											var url = "process/procesar_ingreso2.php";				// --- CREAR ESTE ARCHIVO E INCLUIR CÓDIGO PARA ESTE FORMULARIO---- 
											$.ajax({
														type: 'POST',
														url: url,
														data: $(this).serialize(),
														beforeSend: function () {
																$("#respuesta_ingreso2").html("Procesando, espere por favor...");		// --- CAMBIAR ---- 
														},
														success: function(data){
															$("#respuesta_ingreso2").html(data);		// --- CAMBIAR ----
															//alert(data);
															//\u00F3  E1  E9 ED F3 FA
														},
														error: function(data){
															$("#respuesta_ingreso2").html("Error (3) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente. Si el error persiste, por favor borre las cookies y archivos temporales de su navegador e int&eacute;ntelo de nuevo");
														}
											}); 
											//return false;
									}
							);


//---------CADA VEZ QUE SE MODIFIQUE ESTE ARCHIVO SE DEBEN BORRAR DATOS Y CACHE DEL NAVEGADOR PARA PODER QUE CARGUE NUEVAMENTE ESTE ARCHIVO DEL SERVIDOR -----------------
							$('#formulario_eventos2').submit(										// --- CAMBIAR ---- 
									function(event){
											event.preventDefault();
											var url = "process/procesar_eventos2.php";				// --- CREAR ESTE ARCHIVO E INCLUIR CÓDIGO PARA ESTE FORMULARIO---- 
											$.ajax({
														type: 'POST',
														url: url,
														data: $(this).serialize(),
														beforeSend: function () {
																$("#respuesta_eventos2").html("Procesando, espere por favor...");		// --- CAMBIAR ---- 
														},
														success: function(data){
															$("#respuesta_eventos2").html(data);		// --- CAMBIAR ----
															//alert(data);
															//\u00F3  E1  E9 ED F3 FA
														},
														error: function(data){
															$("#respuesta_eventos2").html("Error (3) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente. Si el error persiste, por favor borre las cookies y archivos temporales de su navegador e int&eacute;ntelo de nuevo");
														}
											}); 
											//return false;
									}
							);

//---------CADA VEZ QUE SE MODIFIQUE ESTE ARCHIVO SE DEBEN BORRAR DATOS Y CACHE DEL NAVEGADOR PARA PODER QUE CARGUE NUEVAMENTE ESTE ARCHIVO DEL SERVIDOR -----------------
							$('#formulario_agenda').submit(										// --- CAMBIAR ---- 
									function(event){
											event.preventDefault();
											var url = "process/procesar_agenda.php";				// --- CREAR ESTE ARCHIVO E INCLUIR CÓDIGO PARA ESTE FORMULARIO---- 
											$.ajax({
														type: 'POST',
														url: url,
														data: $(this).serialize(),
														beforeSend: function () {
																$("#respuesta_agenda").html("Procesando, espere por favor...");		// --- CAMBIAR ---- 
														},
														success: function(data){
															$("#respuesta_agenda").html(data);		// --- CAMBIAR ----
															//alert(data);
															//\u00F3  E1  E9 ED F3 FA
														},
														error: function(data){
															$("#respuesta_agenda").html("Error (3) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente. Si el error persiste, por favor borre las cookies y archivos temporales de su navegador e int&eacute;ntelo de nuevo");
														}
											}); 
											//return false;
									}
							);


//---------CADA VEZ QUE SE MODIFIQUE ESTE ARCHIVO SE DEBEN BORRAR DATOS Y CACHE DEL NAVEGADOR PARA PODER QUE CARGUE NUEVAMENTE ESTE ARCHIVO DEL SERVIDOR -----------------
							$('#formulario_buscar2').submit(										// --- CAMBIAR ---- 
									function(event){
											event.preventDefault();
											var url = "process/procesar_buscar2.php";				// --- CREAR ESTE ARCHIVO E INCLUIR CÓDIGO PARA ESTE FORMULARIO---- 
											$.ajax({
														type: 'POST',
														url: url,
														data: $(this).serialize(),
														beforeSend: function () {
																$("#respuesta_buscar2").html("Procesando, espere por favor...");		// --- CAMBIAR ---- 
														},
														success: function(data){
															$("#respuesta_buscar2").html(data);		// --- CAMBIAR ----
															//alert(data);
															//\u00F3  E1  E9 ED F3 FA
														},
														error: function(data){
															$("#respuesta_buscar2").html("Error (3) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente. Si el error persiste, por favor borre las cookies y archivos temporales de su navegador e int&eacute;ntelo de nuevo");
														}
											}); 
											//return false;
									}
							);


//---------CADA VEZ QUE SE MODIFIQUE ESTE ARCHIVO SE DEBEN BORRAR DATOS Y CACHE DEL NAVEGADOR PARA PODER QUE CARGUE NUEVAMENTE ESTE ARCHIVO DEL SERVIDOR -----------------
							$('#formulario_actualizar2').submit(										// --- CAMBIAR ---- 
									function(event){
											event.preventDefault();
											var url = "process/procesar_actualizar2.php";				// --- CREAR ESTE ARCHIVO E INCLUIR CÓDIGO PARA ESTE FORMULARIO---- 
											$.ajax({
														type: 'POST',
														url: url,
														data: $(this).serialize(),
														beforeSend: function () {
																$("#respuesta_actualizar2").html("Procesando, espere por favor....");		// --- CAMBIAR ---- 
														},
														success: function(data){
															$("#respuesta_actualizar2").html(data);		// --- CAMBIAR ----
															//alert(data);
															//\u00F3  E1  E9 ED F3 FA
														},
														error: function(data){
															$("#respuesta_actualizar2").html("Error (3) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente. Si el error persiste, por favor borre las cookies y archivos temporales de su navegador e int&eacute;ntelo de nuevo");
														}
											}); 
											//return false;
									}
							);

//---------CADA VEZ QUE SE MODIFIQUE ESTE ARCHIVO SE DEBEN BORRAR DATOS Y CACHE DEL NAVEGADOR PARA PODER QUE CARGUE NUEVAMENTE ESTE ARCHIVO DEL SERVIDOR -----------------
							$('#formulario_ingreso_empleo').submit(										// --- CAMBIAR ---- 
									function(event){
											event.preventDefault();
											var url = "process/procesar_ingreso_empleo.php";				// --- CREAR ESTE ARCHIVO E INCLUIR CÓDIGO PARA ESTE FORMULARIO---- 
											$.ajax({
														type: 'POST',
														url: url,
														data: $(this).serialize(),
														beforeSend: function () {
																$("#respuesta_ingreso_empleo").html("Procesando, espere por favor...");		// --- CAMBIAR ---- 
														},
														success: function(data){
															$("#respuesta_ingreso_empleo").html(data);		// --- CAMBIAR ----
															//alert(data);
															//\u00F3  E1  E9 ED F3 FA
														},
														error: function(data){
															$("#respuesta_ingreso_empleo").html("Error (3) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente. Si el error persiste, por favor borre las cookies y archivos temporales de su navegador e int&eacute;ntelo de nuevo");
														}
											}); 
											//return false;
									}
							);

//---------CADA VEZ QUE SE MODIFIQUE ESTE ARCHIVO SE DEBEN BORRAR DATOS Y CACHE DEL NAVEGADOR PARA PODER QUE CARGUE NUEVAMENTE ESTE ARCHIVO DEL SERVIDOR -----------------
							$('#formulario_buscar_empleo').submit(										// --- CAMBIAR ---- 
									function(event){
											event.preventDefault();
											var url = "process/procesar_buscar_empleo.php";				// --- CREAR ESTE ARCHIVO E INCLUIR CÓDIGO PARA ESTE FORMULARIO---- 
											$.ajax({
														type: 'POST',
														url: url,
														data: $(this).serialize(),
														beforeSend: function () {
																$("#respuesta_buscar_empleo").html("Procesando, espere por favor...");		// --- CAMBIAR ---- 
														},
														success: function(data){
															$("#respuesta_buscar_empleo").html(data);		// --- CAMBIAR ----
															//alert(data);
															//\u00F3  E1  E9 ED F3 FA
														},
														error: function(data){
															$("#respuesta_buscar_empleo").html("Error (3) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente. Si el error persiste, por favor borre las cookies y archivos temporales de su navegador e int&eacute;ntelo de nuevo");
														}
											}); 
											//return false;
									}
							);

//---------CADA VEZ QUE SE MODIFIQUE ESTE ARCHIVO SE DEBEN BORRAR DATOS Y CACHE DEL NAVEGADOR PARA PODER QUE CARGUE NUEVAMENTE ESTE ARCHIVO DEL SERVIDOR -----------------
							$('#formulario_actualizar_empleo').submit(										// --- CAMBIAR ---- 
									function(event){
											event.preventDefault();
											var url = "process/procesar_actualizar_empleo.php";				// --- CREAR ESTE ARCHIVO E INCLUIR CÓDIGO PARA ESTE FORMULARIO---- 
											$.ajax({
														type: 'POST',
														url: url,
														data: $(this).serialize(),
														beforeSend: function () {
																$("#respuesta_actualizar_empleo").html("Procesando, espere por favor...");		// --- CAMBIAR ---- 
														},
														success: function(data){
															$("#respuesta_actualizar_empleo").html(data);		// --- CAMBIAR ----
															//alert(data);
															//\u00F3  E1  E9 ED F3 FA
														},
														error: function(data){
															$("#respuesta_actualizar_empleo").html("Error (3) al conectar la base de datos, actualice la p&aacute;gina e int&eacute;ntelo nuevamente. Si el error persiste, por favor borre las cookies y archivos temporales de su navegador e int&eacute;ntelo de nuevo");
														}
											}); 
											//return false;
									}
							);


//-------------------------------------------------------------------------------------------------------------------------------------------------------------------		



					}					
			);