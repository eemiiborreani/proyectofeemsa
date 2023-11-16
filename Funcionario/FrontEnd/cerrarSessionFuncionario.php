<?php

    session_start();

    if(!isset($_SESSION['usuarioFuncionario'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesion");
            </script>
        ';
        header("location: ../../Index.php");
        session_destroy();
        die();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../User/style.css">
  <link rel="stylesheet" href="../../User/Estilo.css">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  <title>Home</title>
</head>
<body>
   <div class="container">
   <div class="navbar">
      <img src="../../img/logo.png" class="logo"><a id="femsa">Feemsa</a>
      <nav>
        <ul>
        <li><a id="home" href="IndexFuncionario.php" class="fa fa-home"></a></li>
        <li><a id="home" href="cerrarSessionFuncionario.php" class="fa fa-user-o"></a></li>
        <li><a id="home" href="asignarPaqueteCamioneta.php" class="fa fa-archive"></a></li>
        <li><a id="home" href="asignarLoteCamion.php" class="fa fa-th-large"></a></li>
    </ul>
      </nav>
      
    </div>
    <div class="header">
  	<h2>Cerrar Sesion</h2>
  </div>
	 
  <form >
  <br>
  	<center><h3>Seguro que desea cerrar sesion</h3>
    <br><br>
    <a href="../../apis/cerrarSession_be.php"><button id="boton2" type="button">Si</button></a>
    <a href="IndexFuncionario.php"><button id="boton2" type="button">No</button></a></center>
  </form>
  </div>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../../img/logo (2).png" alt="">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Somos una empresa que busca lo mejor para el cliente</p>
                <p>PASION POR LA EXCELENCIA EN CADA DETALLE</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">                  
                    <a href="https://es-la.facebook.com/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/feemsa.oficial/?hl=es" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/feemsaoficial?lang=es" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>Feemsa</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <a name="ancla-1"></a>
  </body>
</html>