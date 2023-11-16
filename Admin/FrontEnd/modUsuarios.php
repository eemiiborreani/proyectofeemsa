<?php
include('../../apis/server.php');
$usuarios = "SELECT * FROM users";
    session_start();

    if(!isset($_SESSION['usuarioAdmin'])){
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
  <link rel="stylesheet" href="../../User/usuario.css">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  <title>Home</title>
</head>
<body>
   <div class="container">
    <div class="navbar">
      <img src="../../img/logo.png" class="logo"><a id="femsa">Feemsa</a>
      <nav>
        <ul>
        <li><a id="home" href="IndexAdministrador.php" class="fa fa-home"></a></li>
        <li><a id="home" href="cerrarSessionIndexAdmin.php" class="fa fa-user-o"></a></li>
        <li><a id="home" href="modUsuarios.php" class="fa fa-user-plus"></a></li>
        <li><a id="home" href="ingresarPaqueteAdmin.php" class="fa fa-archive"></a></li>
        <li><a id="home" href="ingresarLoteAdmin.php" class="fa fa-th-large"></a></li>
        <li><a id="home" href="adminCamionCamioneta.php" class="fa fa-truck"></a></li>
      </ul>
      </nav>
      
    </div>   
    <div class="Usuario">
   
    <div class="cliente">
        <div id="usuario">
   <p id="Usuario">Clientes</p>
   <a href="modUserAdmin.php"><button id="boton1" type="button">Modificar</button></a>
</div>
</div>

<div class="camionero">
<div id="usuario">
<p id="Usuario">Camioneros</p>
<a href="modCamioneroAdmin.php"><button id="boton1" type="button">Modificar</button></a>
</div>
</div>

<div class="funcionario">
        <div id="usuario">
   <p id="Usuario">Funcionario</p>
   <a href="modFunAdmin.php"><button id="boton1" type="button">Modificar</button></a>
    </div>
</div>

<div class="administrador">
<div id="usuario">
    <p id="Usuario">Administradores</p>
    <a href="modAdminAdmin.php"><button id="boton1" type="button">Modificar</button></a>
</div>
</div>
</div>



  </form>
       
        </div>
      </div>

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