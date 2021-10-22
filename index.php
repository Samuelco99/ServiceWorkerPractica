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
        <li><a href="index.php  ?>"><span class="prim"><i class="icon icon-home3"></i></span>Incio</a></li>
        <li><a href="usuarios.php"><span class="seg"><i class="icon icon-user"></i></span>Usuarios</a>
          <ul>
            <li><a href="alta.php">Nuevo Usuario</a></li>
            <li><a href="usuarios.php">Lista de Usuarios</a></li>
          </ul>
          </li>
        <li><a href="#"><span class="ter"><i class="icon icon-display"></i></span>Equipos</a>
          <ul>
            <li><a href="">Nuevo Equipo</a></li>
            <li><a href="">Lista de Equipos</a></li>
          </ul>
          </li>
      </ul>
    </nav>

  <br>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/torres.jpg" class="d-block w-100" alt="..." width="100" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/work.jpg" class="d-block w-100" alt="..." width="100" height="450">
    </div>
    <div class="carousel-item">
      <img src="img/torre.jpg" class="d-block w-100" alt="..." width="100" height="450">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- /.row -->
</div>
  

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright Ⓒ Comisión Federal de Electricidad</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>


