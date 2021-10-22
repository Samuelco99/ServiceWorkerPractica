<?php
	
	header('Content-Type: application/json');

	include( "conexion.php" );

	$obj = new Conexion;

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$telefono = $_POST["telefono"];
	$usuario = $_POST["usuario"];
	$contrasena = $_POST["contrasena"];


	$consulta = "INSERT INTO registro(nombre, apellido, telefono, usuario, contrasena)
						VALUES ('" . $nombre . "',
								'" . $apellido . "',
								'" . $telefono . "',
								'" . $usuario . "',
								'" . $contrasena . "')";

	$consultar = "SELECT * FROM registro WHERE telefono='" 
						. $telefono . "' AND usuario='" . $usuario . "'";

	$res = $obj->registrarUsuario( $consulta);
	$r= $obj->registrarUsuario( $consultar);
	

	if( $res == 1 and $r > 0 ){
		$datos = array('estado' => 'ok',
						'texto' => '<span> Usuario registrado con éxito </span>');		
	}
	else{
		$datos = array('estado' => 'no',
						'texto' => '<span> Usuario y/o telefono ya han sido registrados, repetir operación </span>');
	}


	echo json_encode($datos, JSON_FORCE_OBJECT);

?>