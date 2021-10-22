<?php 
  session_start();

  if(!$_SESSION['activo'] == 'SI' ){
     echo "<script>alert('Acceso Exclusivo Administradores'); window.location.href='login.php'</script>";
     // header("Location;/login.html");
  }

  if( isset( $_SESSION['nombre'] ) ){
    $nom = $_SESSION['nombre'];
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>"SIGEB CFE"</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="fonts.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/user.css">  
    
  

  

</head>

<body>


  <!-- Navigation -->

 <nav class="navbar navbar-expand-lg 
  navbar-white bg-white fixed-top">
    <div class="container"> 
      <img src="img/CFE.png" width="100">
      <H4>SISTEMA ADMINISTRADOR DE EQUIPOS</H4>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class ="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
         
              
          
        <li class="nav-item active">
            <?php echo 'Bievenido (Usuario): '; ?>
            <?php echo  $nom; ?> | 
<a href="data/cerrarSesion.php" style="color: #cb3234 " >Cerrar Sesión</a>
              </li>
        </ul>
      </div>
    </div>
  </nav>
<br><br>
  <!-- Header -->
 <nav>
      <ul>
        <li><a href="index.php"><span class="prim"><i class="icon icon-home3"></i></span>Incio</a></li>
        <li><a href="usuarios.php"><span class="seg"><i class="icon icon-user"></i></span>Usuarios</a>
          <ul>
            <li><a href="usuarios.php">Registro</a></li>
            <li><a href="alta.php">Alta de Usuarios</a></li>
          </ul>
          </li>
        <li><a href="#"><span class="ter"><i class="icon icon-display"></i></span>Equipos</a>
          <ul>
            <li><a href="">Registro</a></li>
            <li><a href="">Alta de Equipos</a></li>
          </ul>
          </li>
      </ul>
    </nav>

    

    <section id="container">
     <div class="form_register">
        <h1>Alta de Usuarios</h1>
        <hr>
         <div class="alert"></div>

         <form action="" method="post">
           <label for="RPE">RPE</label>
           <input type="password" name="clave" id="clave" placeholder="RPE">
           <label for="nombre">Nombre</label>
           <input type="text" name="nombre" id="nombre" placeholder="Nombre Completo">
           
           <label for="area">Area</label>
           <select name="area" id="area">
            <option selected>Seleccionar ...</option>
             <option>DP03C Ezequiel Montes</option>
             <option>DP03D Amealco</option>
             <option>DP03E Vizarron</option>
             <option>DP03J Pinal de Amoles</option>
             <option>DP03F Jerecuaro</option>
             <option>DP03G San Juan del Río</option>
             <option>DP03H Tequisquiapan</option>
             <option>Regional de Distribucion Irapuato</option>
             <option>Departamento de TICs</option>
             <option>Departamento de Recursos Humanos</option>
           </select>

            <label for="departamento">Departamento</label>
            <select name="departamento" id="departamento">
              <option selected>Seleccionar ...</option>
             <option>Alta Dirección </option>
             <option>DP03D Amealco</option>
             <option>DP03E Vizarron</option>
             <option>DP03J Pinal de Amoles</option>
             <option>DP03F Jerecuaro</option>
             <option>DP03G San Juan del Río</option>
             <option>DP03H Tequisquiapan</option>
             <option>Regional de Distribucion Irapuato</option>
             <option>Departamento de TICs</option>
             <option>Departamento de Recursos Humanos</option>
           </select>
           <input type="submit" value="Crear Usuario" class="btn_save">
         </form>
         </div>
      </section>

    </body>
    </html>

    