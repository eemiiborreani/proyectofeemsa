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
    <link rel="stylesheet" href="../CSS/camioneros.css">
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
			<th>CAR REGISTRATION</th>
			<th>TRUCKER'S NAME</th>
			<th>ID LOT</th>
            <th>STATUS</th>
            <th>UNREALIZED</th>
            <th>PENDIENT</th>
            <th>REALIZED</th>
		</tr>

		<?php 
		$sql="SELECT camion.matricula, camionero.username, loteinicial.id, camion.entregada
        FROM loteinicial
        LEFT JOIN camionero ON loteinicial.matriculaCamion = camionero.matriculaAsignada
        LEFT JOIN camion ON loteinicial.matriculaCamion = camion.matricula
        ";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){

            ?>
    <tr>
			<td><?php echo $mostrar['matricula'] ?></td>
			
            <td><?php echo $mostrar['username'] ?></td>
			
            <td><?php echo $mostrar['id'] ?></td>

            <td><?php echo $mostrar['entregada'] ?></td>
            
            <td><form action="../BackEnd/estadoSinRealizar_be.php" method="POST" class="formulario__register">
            <p>to confirm put the car registration<matricula/p>
            <input type="text" placeholder="matricula" name="matricula" required>
            <button id="Estado">Unrealized</button>
            </form></td>

            <td><form action="../BackEnd/estadoPendiente_be.php" method="POST" class="formulario__register">
            <p>to confirm put the car registration</p>
            <input type="text" placeholder="matricula" name="matricula" required>
            <button id="Estado">Pendient</button>
            </form></td>

            <td><form action="../BackEnd/estadoRealizado_be.php" method="POST" class="formulario__register">
            <p>to confirm put the car registration</p>
            <input type="text" placeholder="matricula" name="matricula" required>
            <button id="Estado">Realized</button>
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

  </body>
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