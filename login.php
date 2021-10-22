<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/reset.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="css/style.css">



	

</head>
<body>

<body>
	

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Navigation -->
 <nav >
    <div> 
      <img src="img/CFE.png" width="150">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class ="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->

    <div class="container h-100">
      <div class="row h-100 align-items-center">
           
         
         
         
        </div>
  
  
	<title>Login</title>
  <?php require_once "includes/scripts.php"; ?>
</head>
<body>
	<div class="wrapper">
		<form class="form-signin" action="data/validar.php" method="POST" >
			<h2 class="form-signin-heading">Login</h2>
			<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required="required" autofocus="true">
			<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required="required">
			<button id="btnLogin" class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: #088a4b;">Acceder</button>
		</form>
	</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#btnLogin').click(function(){
      if($('#usuario').val()==""){
        alertify.alert("Inserta Usuario");
        return false;
      }else if($('#contrasena').val()==""){
        alertify.alert("Inserta Password");
        return false;
      }

      cadena="usuario=" + $('#usuario').val() + 
          "&password=" + $('#contrasena').val();

          $.ajax({
            type:"POST",
            url:"php/login.php",
            data:cadena,
            success:function(r){
              if(r==1){
                window.location="index.php";
              }else{
                alertify.alert("Usuario y Contrasea Inconrrecto");
              }
            }
          });
    }); 
  });
</script>