<?php
	class Conexion{
		var $conn;

		function conectar(){
			$this->conn = mysqli_connect( "localhost", "root", "" )
								or die( "Conexión fallida " . mysql_error() ); 

			mysqli_select_db( $this->conn, "ti02" )
					or die( "No se pudo conectar a la base de datos" );

			return $this->conn;
		}

		function buscarUsuario( $usuario, $contrasena){
			$this->conectar();

			if( !$this->conn ){
				exit( "<h1> Error en la conexión... </h1>" );
			}
			else{
				$consulta = "SELECT * FROM registro WHERE usuario='" 
						. $usuario . "' AND contrasena='" . $contrasena . "'";

				$result = mysqli_query( $this->conn, $consulta );

				$num = mysqli_num_rows( $result );

				return $num;
			}
		}

		function buscarRepetido( $telefono, $usuario){
			$this->conectar();

			if( !$this->conn ){
				exit( "<h1> Error en la conexión... </h1>" );
			}
			else{
				$consultar = "SELECT * FROM registro WHERE telefono='" 
						. $telefono . "' AND usuario='" . $usuario . "'";

				$resul1 = mysqli_query( $this->conn, $consultar );

				$num1 = mysqli_num_rows( $resul1);

				return $num1;
			}
		}

		function registrarUsuario($consulta){
			$this->conectar();

			if( !$this->conn ){
				exit( "<h1> Error en la conexión... </h1>" );
			}
			else{
				$result = mysqli_query( $this->conn, $consulta);
				return 1;
			}

		
		
		 
		}
	}
?>