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
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/modAdmin.css">
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
    <div id="todo">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script>
			$(function(){
                $('#paq').click(function(){
                $(this).next('#adm').slideToggle();
                $(this).toggleClass('disable'); 
			   });
			});
		</script>
    
   
    <a id="paq" class="fa fa-plus-square"></a>
                <div id="adm">
                <form action="../BackEnd/registerPaquete_be.php" method="POST" class="formulario__register">
                    <h2>Add Package</h2>
                    <br>
                   
                    <input type="text" name="destino"  placeholder="destino"  required>
                    <input type="text" name="salida" placeholder="salida"    required>
                    <input type="text" name="matriculaCamioneta" placeholder="matricula">
                    <input type="text" name="idLote" placeholder="lote">
                    <br>
                    <button>Add</button>
                </form>
                </div>

                
                <script>
			$(function(){
		       $('#elm').click(function(){
			   $(this).next('#adm').slideToggle();
			   $(this).toggleClass('active');          
			   });
			});
		</script>
                
                
                <a id="elm" class="fa fa-remove"></a>
                <div id="adm">
                <form action="../BackEnd/eliminarPaquete_be.php" method="POST" class="formulario__register">
                    <h2>Delete Package</h2>
                    <br>
                    <input type="number" name="id"  placeholder="id"  required>
                    <br>
                    
                    <button>Delete</button>
                    </form>
                    </div>


                    <script>
			$(function(){
		       $('#mod').click(function(){
			   $(this).next('#adm').slideToggle();
			   $(this).toggleClass('active');          
			   });
			});
		</script>


        
                <a id="mod" class="fa fa-wrench"></a>
                <div id="adm">
                <form action="../BackEnd/modificarPaquete_be.php" method="POST" class="formulario__register">
                    <h2>Modify Package</h2>
                    <br>
                    <h3>Package id to modify</h3>
                    <input type="number" name="id"  placeholder="id"  required>
                    <br><br>
                    <h3>modify it</h3>
                    <input type="text" name="destino"  placeholder="destino"  required>
                    <input type="text" name="salida" placeholder="salida"    required>
                    <input type="text" name="matricula" placeholder="matricula"   >
                    <input type="text" name="idLote" placeholder="lote">
                    <button>Modify</button>
                    </form>
                    </div>
                	
                    </div>
                    
                    
                    <h2>PACKAGE</h2>
                    <table border="1" >
		<tr>
			<th>ID</th>
			<th>DESTINATION</th>
			<th>DEPARTURE</th>
            <th>CAR REGISTRATION</th>
            <th>LOT</th>
		</tr>

		<?php 
		$sql="SELECT * from paquete";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['destino'] ?></td>
			<td><?php echo $mostrar['salida'] ?></td>
            <td><?php echo $mostrar['matriculaCamioneta'] ?></td>
            <td><?php echo $mostrar['idLote'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
<h2>PickUp</h2>

    <table border="1" >
		<tr>
			<th>CAR REGISTRATION</th>
			<th>DEPARTURE</th>
            <th>DESTINATION</th>
			<th>STATUS</th>
		</tr>

		<?php 
		$sql="SELECT * from camioneta";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['matricula'] ?></td>
			<td><?php echo $mostrar['partida'] ?></td>
            <td><?php echo $mostrar['destino'] ?></td>
			<td><?php echo $mostrar['entregada'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
                

    <h2>LOT</h2>
                    <table border="1" >
		<tr>
			<th>ID</th>
			<th>STORE</th>
			<th>CAR REGISTRATION</th>
            <th>DATE OF DEPARTURE</th>
            <th>STATUS</th>
		</tr>

		<?php 
		$sql="SELECT * from loteInicial";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['almacen'] ?></td>
			<td><?php echo $mostrar['matriculaCamion'] ?></td>
            <td><?php echo $mostrar['fechaSalida'] ?></td>
            <td><?php echo $mostrar['entregada'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
                </div>
            </form>
            
        </div>

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