<?php
 	include( "conexion.php" );

 	$obj = new Conexion;

 	$usuario = $_POST["usuario"]; 
 	$contrasena = $_POST["contrasena"];

 	$res = $obj->buscarUSUARIO( $usuario, $contrasena );

 	if( $res == 1){


 		session_start();

 		$_SESSION['activo']='SI';
 		$_SESSION['saludo']='Bienvenido';
 		$_SESSION['nombre'] =$usuario;

 		header("Location:../index.php");
 		}
 		else{
 		header("Location:../login.php");
 		}
 	?>