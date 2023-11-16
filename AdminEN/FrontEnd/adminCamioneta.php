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
                <form action="../BackEnd/registerCamioneta_be.php" method="POST" class="formulario__register">
                    <h2>Add PickUp</h2>
                    <br>
                   
                    <input type="text" name="matricula"  placeholder="matricula"  required>
                    <p>DEPARTURE</p><input type="date" name="partida" placeholder="partida"    required>
                    <p>ARRIVAL</p><input type="date" name="llegada" placeholder="partida"    required>
                    <input type="text" name="destino" placeholder="destino"   required>
                    <input type="text" name="entregada" placeholder="entrega"  required>
                    <input type="text" name="estado" placeholder="estado"  required>
                    <input type="number" name="idCamionero" placeholder="idCamionero"  required>
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
                <form action="../BackEnd/eliminarCamioneta_be.php" method="POST" class="formulario__register">
                    <h2>Delete PickUp</h2>
                    <br>
                    <input type="text" name="matricula"  placeholder="matricula"  required>
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
                <form action="../BackEnd/modificarCamioneta_be.php" method="POST" class="formulario__register">
                    <h2>Modify PickUp</h2>
                    <br>
                    <h3>car registration from the pickup</h3>
                    <input type="text" name="matricula"  placeholder="matricula"  required>
                    <br><br>
                    <h3>modify it</h3>
                    <p>DEPARTURE</p><input type="date" name="partida"  placeholder="partida"  required>
                    <p>ARRIVAL</p><input type="date" name="llegada" placeholder="partida"    required>
                    <input type="text" name="destino" placeholder="destino"    required>
                    <input type="text" name="entregada" placeholder="entregada"   required>
                    <input type="text" name="estado" placeholder="estado"  required>
                    <input type="number" name="idCamionero" placeholder="idCamionero"  required>
                    <button>Modify</button>
                    </form>
                    </div>
                	
                    </div>
                    
                    
                    
                    <table border="1" >
		<tr>
			<th>CAR REGISTRATION</th>
			<th>DEPARTURE</th>
            <th>ARRIVAL</th>
			<th>DESTINATION</th>
			<th>DELIVERY</th>
            <th>STATE</th>
            <th>ID TRUCKER</th>
		</tr>

		<?php 
		$sql="SELECT * from camioneta";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['matricula'] ?></td>
			<td><?php echo $mostrar['partida'] ?></td>
            <td><?php echo $mostrar['llegada'] ?></td>
			<td><?php echo $mostrar['destino'] ?></td>
			<td><?php echo $mostrar['entregada'] ?></td>
            <td><?php echo $mostrar['estado'] ?></td>
            <td><?php echo $mostrar['idCamionero'] ?></td>
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