<?php
include('../../apis/server.php');
    session_start();
    if(!isset($_SESSION['usuarioCamionero'])){
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
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/camionero.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  <title>Home</title>
</head>
<body>
   <div class="container">
    <div class="navbar">
      <img src="../../img/logo.png" class="logo"><a id="femsa">Feemsa</a>
      <nav>
        <ul>
        <li><a id="home" href="IndexCamionero.php" class="fa fa-home"></a></li>
        <li><a id="home" href="cerrarSessionIndexCamionero.php" class="fa fa-user-o"></a></li>
        <li><a id="home" href="camioneroPagina.php" class="fa fa-truck"></a></li>
    </ul>
      </nav>
      
</div>
<center>

<br>

<table border="1" >
		<tr>
			<th>MATRICULA</th>
			<th>NOMBRE CAMIONERO</th>
			<th>ID PAQUETE</th>
            <th>ID LOTE</th>
            <th>ESTADO</th>
            <th>SIN REALIZAR</th>
            <th>PENDIENTE</th>
            <th>REALIZADO</th>
		</tr>

		<?php 
		$sql="SELECT paquete.matriculaCamioneta, camionero.username, paquete.id, paquete.entrega, paquete.idLote
        FROM paquete
        LEFT JOIN camionero ON paquete.matriculaCamioneta = camionero.matriculaAsignada
        LEFT JOIN camioneta ON paquete.matriculaCamioneta = camioneta.matricula
        ";
		
        
        $result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){

            ?>
    <tr>
			<td><?php echo $mostrar['matriculaCamioneta'] ?></td>
			
            <td><?php echo $mostrar['username'] ?></td>
			
            <td><?php echo $mostrar['id'] ?></td>

            <td><?php echo $mostrar['idLote'] ?></td>

            <td><?php echo $mostrar['entrega'] ?></td>
            
            <td><form action="../BackEnd/estadoSinRealizarCamioneta_be.php" method="POST" class="formulario__register">
            <p>para confirmar colocar matricula</p>
            <input type="text" placeholder="matricula" name="matricula" required>
            <button id="Estado">Sin Realizar</button>
            </form></td>

            <td><form action="../BackEnd/estadoPendienteCamioneta_be.php" method="POST" class="formulario__register">
            <p>para confirmar colocar matricula</p>
            <input type="text" placeholder="matricula" name="matricula" required>
            <button id="Estado">Pendiente</button>
            </form></td>

            <td><form action="../BackEnd/estadoRealizadoCamioneta_be.php" method="POST" class="formulario__register">
            <p>para confirmar colocar matricula</p>
            <input type="text" placeholder="matricula" name="matricula" required>
            <button id="Estado">Realizado</button>matricula
            </form></td>
		</tr>
        <?php 
}

?>
	</table>    
                </div>
            </form>
            
        </div>
</center>

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