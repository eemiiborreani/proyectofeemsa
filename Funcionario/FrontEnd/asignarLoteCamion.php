<?php
include('../../apis/server.php');
$usuarios = "SELECT * FROM users";
    session_start();

    if(!isset($_SESSION['usuarioFuncionario'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesion");
            </script>
        ';
        header("location: ../Index.php");
        session_destroy();
        die();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../../Admin/CSS/modAdmin.css">
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
    <center>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		
    <div id="todo">
        
        <script>
			$(function(){
		       $('#paq').click(function(){
			   $(this).next('#adm').slideToggle();
			   $(this).toggleClass('active');          
			   });
			});
		</script>

        

               
                <a id="paq" class="fa fa-plus-square"></a>
                <div id="adm">
                    <form action="../BackEnd/registrarLote_be.php" method="POST" class="formulario__register">
                    <h2>Ingresar Lote</h2>
                    <br>
                    <input type="text" name="almacen"  placeholder="almacen"  required>
                    <input type="text" name="matriculaCamion"  placeholder="matriculaCamion"  >
                    <input type="date" name="fechaSalida" placeholder="fechaSalida"    required>
                    <input type="text" name="entregada" placeholder="entregada"   required>
                    <br>
                    <button>Agregar</button>
                
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
                <form action="../BackEnd/eliminarLote_be.php" method="POST" class="formulario__register">
                    <h2>Eliminar Lote</h2>
                    <br>
                    <input type="number" name="id"  placeholder="id"  required>
                    <br>
                    <button>Eliminar</button>
                    
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
                <form action="../BackEnd/modificarLote_be.php" method="POST" class="formulario__register">
                    <h2>Modificar Lote</h2>
                    <br>
                    <h3>id del Lote a modificar</h3>
                    <input type="number" name="id"  placeholder="id"  required>
                    <br><br>
                    <h3>escribe lo que quieres cambiar</h3>
                    <input type="text" name="almacen"  placeholder="almacen"  required>
                    <input type="text" name="matriculaCamion"  placeholder="matriculaCamion" >                    
                    <input type="date" name="salida" placeholder="salida"    required>
                    <input type="text" name="entrega" placeholder="entrega"   required>
                  
                    
                    <button>Modificar</button>
                    </form>
                </div>
                </div>



                <h2>Lotes</h2>


                    <table border="1" >
		<tr>
			<th>ID</th>
			<th>ALMACEN</th>
            <th>MATRICULA</th>
			<th>FECHA SALIDA</th>
			<th>ENTREGA</th>
		</tr>

		<?php 
		$sql="SELECT * from loteinicial";
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
    
    <h2>Camiones</h2>

    <table border="1" >
		<tr>
			<th>MATRICULA</th>
			<th>PARTIDA</th>
			<th>DESTINO_CAMION</th>
			<th>ENTREGA</th>
		</tr>

		<?php 
		$sql="SELECT * from camion";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['matricula'] ?></td>
			<td><?php echo $mostrar['partida'] ?></td>
			<td><?php echo $mostrar['destino_camion'] ?></td>
			<td><?php echo $mostrar['entregada'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
               
               
                
            
    





        


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
</html>