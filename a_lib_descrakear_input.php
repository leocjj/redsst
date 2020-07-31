
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>

<?php

function descrakear_input ($conexion, $x, $permitir){
	//echo "<br/>ORIGINAL:-".$x."-KO";	//TEST
	//SI SE UTILIZA REAL SCAPE STRING, LOS TEXTOS QUEDAN SIN ENTER Y SE REEPLAZA POR LAS LETRAS RN, QUEDA MUY FEY, ILEGIGLE.
	//$x = mysqli_real_escape_string($conexion, $x);	// Los caracteres codificados son NUL (ASCII 0), \n, \r, \, ', ", y Control-Z.
	$z = trim($x, "\x00..\x0C"); 					// Elimina los caracteres de control ASCII al inicio y final de $binary (from 0 to 12 inclusive).
	$z = trim($x, "\x0E..\x1F"); 					// Elimina los caracteres de control ASCII al inicio y final de $binary (from 14 to 31 inclusive).
	$z = trim($x, "\x7B..\x80"); 					// Elimina los caracteres de control ASCII al inicio y final de $binary (from 0 to 31 inclusive).	
	$z = trim($x, "\xA6..\xB4"); 					// Elimina los caracteres de control ASCII al inicio y final de $binary (from 0 to 31 inclusive).
	$z = trim($x, "\xB8..\xD1"); 					// Elimina los caracteres de control ASCII al inicio y final de $binary (from 0 to 31 inclusive).
	$z = trim($x, "\xD5..\xDF"); 					// Elimina los caracteres de control ASCII al inicio y final de $binary (from 0 to 31 inclusive).
	$z = trim($x, "\xEC..\xFF"); 					// Elimina los caracteres de control ASCII al inicio y final de $binary (from 0 to 31 inclusive).
	$z = trim($x);									// Elimina los espacios en blanco del inicio y final .
	$x = strip_tags ( $x );	 						// Elimina etiquetas HTML y PHP
	//utf8_decode("Solución útil y apañada a UTF-8");
	$strok = " *1234567890_,.?abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ"."á"."é"."í"."ó"."ú"."Á"."É"."Í"."Ó"."Ú"."ü"."Ü".$permitir;  //LISTADO CARACTERES VALIDOS.
	//echo "<br/> strok: ".$strok." OK";
	//SE DEBE DEJAR " " Y "*" PARA PODER HACER CONSULTRAS SQL
	//LEER UN CARACTER,	BUSCARLO EN STROK, SI ESTÁ, INCLUIRLO EN $xtemp.
	$xtemp = "";
	
	for ($i = 0; $i < strlen($x); $i++){
		$t = substr ( $x, $i, 1 );
		//echo "<br/>".$t;
		for ($j = 0; $j < strlen($strok); $j++){
			if ( $t == substr ( $strok, $j, 1 )){
				$xtemp .= $t;
				break;	
			}		
		}
		if ( $t == chr(13) ){	//SI DE DETECTA TECLA ENTER, DEJARLA. PARA QUE EL TEXTO SE VEA BIEN.
			$xtemp .= chr(13);
		}	
		//echo "<br/>".$xtemp;
	}
	
	//KILL KEY WORDS BUT PERMIT $permitir
	$prohibidas = array("SELECT", "INSERT ", "UPDATE", "DELETE", "FILE", "CREATE", "ALTER ", "INDEX", "DROP", "CREATE", "SHOW", "EXECUTE", "EVENT ", "TRIGGER", "GRANT", "PROCESS", "RELOAD", "SHUTDOWN", " LOOK", ",LOOK", "_LOOK", ".LOOK", "?LOOK", "¡LOOK","REFERENCES", "REPLICATION", "XP_", "TRUNCATE", "FLUSH", "CMDSHELL", "GRANTLOGIN", "LOGIN" );
	// str_ireplace — Versión insensible a mayúsculas y minúsculas de str_replace(). str_replace — Reemplaza todas las apariciones del string buscado con el string de reemplazo.
	// mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
	$prohibidas = str_ireplace($permitir, "", $prohibidas);	// ELIMINA DE $prohibidas LA PALABRA A $permitir
	$xtemp = str_ireplace($prohibidas, "", $xtemp);	// ELIMINA DE $xtemp LAS PALABRAS PROHIBIDAS
	//echo "<br/> CONSULTA-".$xtemp."-OK";	//TEST
	return $xtemp;
}
?>

