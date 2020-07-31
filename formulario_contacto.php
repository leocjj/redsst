<?php

//INCREMENTAR EN CONSECUTIVO DE LA VARIABLE C�DIGO PARA EVITAR REPETICI�N Y ERRORES AL MOSTRAR LA MISMA VARIABLE EN UN DOCUMENTO
//SE DEBEN COLOCAR COMILLAS SENCILLAS CUANDO SE MANEJAN CADENAS TEXTO HTML EN PHP, PERO NO ES NECESARIO SI SE USA DENTRO DE <<<"ENDNombre"

$codigo5 = "";
$codigo5 .= <<<"ENDTitulo"
							<form method="post" id="formulario_contacto" action="" class='contacto'  autocomplete="off">
					            <h2>Env&iacute;anos un mensaje</h2>
					            <div class="field half first"> <input type='text' name='nombre_contacto' maxlength="55" placeholder=" Nombre " class='nombre' /> </div>
					            <div class="field half"> <input type='email' name='correo_contacto' maxlength="55" placeholder=" Correo electr&oacute;nico" class="email"/> </div>
					            <!---------------------  DOS CAMPOS PARA QUE LA PERSONA INGRESE UN CÃƒâ€œDIGO ALEATORIO. EVITAR BOTS ------ -->
ENDTitulo;
$codigo5 .= "					<div class='field half first'><input type='text' name='codigo_aleatorio' value=".rand(0,999)." readonly/></div>";
$codigo5 .= <<<"ENDTitulo2"
								<div class="field half"> <input type='text' name='codigo_ingresado' maxlength="3" placeholder="Digite el pin del campo anterior" class='nombre'/> </div>
								<!--------------------------------------------------------------------------------------------------------->
					            <div> <textarea rows='2' name='mensaje_contacto' maxlength="250" placeholder=" Mensaje (m&aacute;ximo 250 caracteres) "></textarea> </div>
					            <div> <br/><input type='submit' value='Enviar mensaje' class="special" /> </div>		

					            <!--------------  CAMPO PARA MOSTRAR RESPUESTA DEL PROCESO DE AJAX PHP------ -->					            
					            <div Style="color:red;" id="respuesta_contacto">  </div>		<!-- debe ser con ID, no funciona con name  -->
							</form>
ENDTitulo2;

echo $codigo5;

?>