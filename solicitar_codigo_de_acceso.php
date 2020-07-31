<?php
//---------- CODIGO COMUN A TODAS LAS PÁGINAS QUE REQUIERAN EL FORMULARIO PARA SOLICITAR CÓDIGO DE ACCESO A REDSST POR CORREO ELECTRÓNICO

//INCREMENTAR EN CONSECUTIVO DE LA VARIABLE CÓDIGO PARA EVITAR REPETICIÓN Y ERRORES AL MOSTRAR LA MISMA VARIABLE EN UN DOCUMENTO
//SE DEBEN COLOCAR COMILLAS SENCILLAS CUANDO SE MANEJAN CADENAS TEXTO HTML EN PHP, PERO NO ES NECESARIO SI SE USA DENTRO DE <<<"ENDNombre"

$codigo2 = "";
$codigo2 .= <<<"ENDTitulo"
							<div style=" color:navy; text-align:justify ">
								Toda la informaci&oacute;n ingresada en Red SST est&aacute; vinculada a un correo electr&oacute;nico v&aacute;lido. Para acceder a nuestros 
								servicios y evitar suplantaciones, debes tener un c&oacute;digo de acceso el cual es enviado al correo suministrado. 
								Si a&uacute;n no tienes un c&oacute;digo, no lo recuerdas o quieres cambiarlo, escribe tu correo en el siguiente formulario y da clic en el 
								bot&oacute;n <b><em>Solicitar c&oacute;digo</em></b>. Te ser&aacute; enviado un nuevo c&oacute;digo. Por seguridad, en el espacio donde se 
								solicita el pin debes escribir el n&uacute;mero de tres d&iacute;gitos que se muestra al lado. Recuerda revisar la carpeta de <em>
								correo no deseado</em> o <em>spam.</em> En algunas ocasiones el env&iacute;o puede tardar algunos minutos. Si ya cuentas con un c&oacute;digo
								v&aacute;lido, puedes ir al paso siguiente.<br/><br/>
							</div>
							<div style="line-height:95%;  color:navy; text-align:justify "></div>

							<!------------------------------------ ESCRIBIR CORREO ELECTRONICO Y SOLICITAR CODIGO --------------------------------------------->
							<form method="post" id="formulario_ingreso" action="" class='contacto' autocomplete="off">
								<div ><input type='email' name='correo_ingreso' maxlength="55" placeholder=" Correo electr&oacute;nico" class="email"/></div>
							            
							    <!--------------  DOS CAMPOS PARA QUE LA PERSONA INGRESE UN CODIGO ALEATORIO. EVITAR BOTS ------ -->
ENDTitulo;
$codigo2 .="					<div class='field half first'> <input type='text' name='codigo_aleatorio' id='codigo_aleatorio' value=".rand(0,999)." readonly/></div>".PHP_EOL;
$codigo2 .= <<<"ENDTitulo2"
					            <div class="field half"> <input type='text' name='codigo_ingresado' maxlength="3" placeholder="Digita el pin del campo anterior" class='nombre'/> </div>
								<!--------------------------------------------------------------------------------------------------------->					            
					            <div > <br/><input type='submit' value='Solicitar c&oacute;digo' class="special" /> </div>			

					            <!--------------  CAMPO PARA MOSTRAR RESPUESTA DEL PROCESO DE AJAX PHP------ -->
					            <div Style="color:red;" id="respuesta_ingreso">  </div>		<!-- debe ser con ID, no funciona con name  -->
							</form>
ENDTitulo2;

echo $codigo2;

?>