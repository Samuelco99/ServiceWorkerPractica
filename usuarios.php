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
    <link href="css/user.css" rel="stylesheet">
  

  

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

  <section id="container"><br>
    <h1>LISTA DE USUARIOS</h1>
    <a href="alta.php" class="btn_new">Nuevo Usuario</a>
    <table>
      <tr>
        <th>RPE</th>
        <th>NOMBRE</th>
        <th>AREA</th>
        <th>DEPARTAMENTO</th>
        <th>ACCIONES</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Ubaldo</td>
        <td>Administracion</td>
        <td>Oficina</td>
        <td>
          <a class="link_edit" a href="#">Editar</a>
            |
          <a class="link_delete" a href="#">Eliminar</a>
        </td>
      </tr>
        <tr>
        <td>1</td>
        <td>Ubaldo</td>
        <td>Administracion</td>
        <td>Oficina</td>
        <td>
          <a class="link_edit" a href="#">Editar</a>
            |
          <a class="link_delete" a href="#">Eliminar</a>
        </td>
      </tr>
        <tr>
        <td>1</td>
        <td>Ubaldo</td>
        <td>Administracion</td>
        <td>Oficina</td>
        <td>
          <a class="link_edit" a href="#">Editar</a>
            |
          <a class="link_delete" a href="#">Eliminar</a>
        </td>
      </tr>
        <tr>
        <td>1</td>
        <td>Ubaldo</td>
        <td>Administracion</td>
        <td>Oficina</td>
        <td>
          <a class="link_edit" a href="#">Editar</a>
            |
          <a class="link_delete" a href="#">Eliminar</a>
        </td>
      </tr>
    </table>
  </section>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright Ⓒ Comisión Federal de Electricidad</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
    