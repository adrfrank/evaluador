<?php
	
	$nombre         = $_REQUEST['nombre'];
	$apellido       = $_REQUEST['apellido'];
	$nick 	        = $_REQUEST['nick'];
	$email	        = $_REQUEST['email'];
	$remail         = $_REQUEST['remail'];
	$dia            = $_REQUEST['dia'];
	$mes            = $_REQUEST['mes'];
	$anio           = $_REQUEST['anio'];
	$grado          = $_REQUEST['grado'];
	$tPlayera       = $_REQUEST['tPlayera'];
	$calle          = $_REQUEST['calle'];
	$colonia        = $_REQUEST['colonia'];
	$ciudad         = $_REQUEST['ciudad'];
	$cp             = $_REQUEST['cp'];
	$telefono	    = $_REQUEST['telefono'];
	$escuela	    = $_REQUEST['escuela'];
	$nescuela       = $_REQUEST['nescuela'];
	$ciudadE        = $_REQUEST['ciudadE'];
	$estadoE        = $_REQUEST['estadoE'];
	$direccionE     = $_REQUEST['direccionE'];
	$paginaE        = $_REQUEST['paginaE'];
	$nombreA        = $_REQUEST['nombreA'];
	$puesto         = $_REQUEST['puesto'];
	$sabesProgramar = $_REQUEST['sabesProgramar'];
	$poster         = $_REQUEST['poster'];
	$internet       = $_REQUEST['internet'];
	$profesor       = $_REQUEST['profesor'];
	$amigo          = $_REQUEST['amigo'];
	$television     = $_REQUEST['television'];
	$radio          = $_REQUEST['radio'];
	$periodico      = $_REQUEST['periodico'];
	$otro           = $_REQUEST['otro'];
	$comentario     = $_REQUEST['comentario'];
	$resultadoRadio =$_REQUEST['resultadoRadio'];


	/*echo "nombre" . $nombre . "apellido" . $apellido . "nick" . $nick . "email" . $email . "remail" . $remail . "dia" . $dia . "mes" . $mes . "año" . 
	$anio . "grado" . $grado . "tPlayera". $tPlayera . "calle" . $calle . "colonia" . $colonia . "ciudad" . $ciudad . "CP" . $cp . "Telefono" . $telefono.
	"escuela" . $escuela  . "nescuela" . $nescuela . "ciudadE" . $ciudadE . "estadoE" .  $estadoE . "direccionE" . $direccionE . "paginaE" . $paginaE .
	"nombreA" . $nombreA . "PuestOO" . $puesto . "elementosResp" . $elementosResp . "poster" . $poster . "internet" . $internet . 
	"profesor" . $profesor . "amigo" . $amigo . "television" . $television . "radio" .  $radio ."periodico " . $periodico . "otro" .  $otro . "comentario" . $comentario. "resultadoRadio".
	$resultadoRadio;*/

	echo "Respuesta" . $sabesProgramar . "Puesto " . $puesto .  "poster  " . $poster . "internet  " . $internet . 
	"profesor  " . $profesor . "amigo  " . $amigo . "television  " . $television . "radio  " .  $radio  ."periodico " . $periodico ."otro  " .  $otro;
   
                
             


?>