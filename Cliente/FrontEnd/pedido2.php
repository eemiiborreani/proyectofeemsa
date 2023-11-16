<?php
include('../../apis/server.php');
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

$codigo = $_POST['codigo'];
$verificar_codigo = mysqli_query($conexion, "SELECT '*' FROM paquete WHERE id = '$codigo'");

if(mysqli_num_rows($verificar_codigo) < 1){
    
    echo'
    <script>
        alert("no se a encontrado el codigo");
        window.location = "Pedido.php";
    </script>
    ';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/pedido.css">
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
                <h5>Entregas a domicilio</h5>
                <a id="logo" href="" class="fa fa-archive"></a><input id="codigo" name="codigo" placeholder="Nro. paquete" required>
                <button>ver pedido</button>
                </form>    
                
                <table border="1" >
		<tr>
			<th>ID</th>
			<th>DESTINO</th>
			<th>SALIDA</th>
            <th>ENTREGA</th>
            <th>MATRICULA</th>
            <th>LOTE</th>
		</tr>

		<?php 

		$result=mysqli_query($conexion, "SELECT * from paquete WHERE id ='$codigo'" );

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['destino'] ?></td>
			<td><?php echo $mostrar['salida'] ?></td>
            <td><?php echo $mostrar['entrega'] ?></td>
            <td><?php echo $mostrar['matriculaCamioneta'] ?></td>
            <td><?php echo $mostrar['idLote'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
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
                <p1>Somos una empresa que busca lo mejor para el cliente</p>
                <p1>PASION POR LA EXCELENCIA EN CADA DETALLE</p>
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