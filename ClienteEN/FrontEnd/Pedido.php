<?php

    session_start();

    if(!isset($_SESSION['usuarioCliente'])){
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
  <link rel="stylesheet" href="../CSS/pedidos1.css">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  <title>Home</title>
</head>
<body>
   <div class="container">
    <div class="navbar">
      <img src="../../img/logo.png" class="logo1"><a id="femsa">Feemsa</a>
      <nav>
        <ul>
        <li><a id="home" href="IndexClientes.php" class="fa fa-home"></a></li>
        <li><a id="home" href="cerrarSessionIndexCliente.php" class="fa fa-user-o"></a></li>
        <li><a id="home" href="Pedido.php" class="fa fa-box"></a></li>
      </ul>
      </nav>
    </div>
            
    <div id="pedido">
            <form action="pedido2.php" method="POST">
                <h5>Home delivery</h5>
                <a id="logo" href="" class="fa fa-archive"></a><input id="codigo" name="codigo" placeholder="Nro. paquete" required>
                <button>see package</button>
                </form>    
            
              
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
                <h2>ABOUT US</h2>
                <p>We are a company that seeks the best for the client</p>
                <p>PASSION FOR EXCELLENCE IN EVERY DETAIL</p>
            </div>
            <div class="box">
                <h2>FOLLOW US</h2>
                <div class="red-social">                  
                    <a href="https://es-la.facebook.com/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/feemsa.oficial/?hl=es" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/feemsaoficial?lang=es" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>Feemsa</b> - All rights reserved.</small>
        </div>
    </footer>
    <a name="ancla-1"></a>
  </body>
</html>