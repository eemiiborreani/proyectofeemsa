
<?php
include('../../apis/server.php');
$matricula = $_POST['matricula'];
$partida = $_POST['partida'];
$llegada = $_POST['llegada'];
$destino = $_POST['destino'];idCamionero
$entrega = $_POST['entregada'];
$estado = $_POST['estado'];
$idCamionero= $_POST['idCamionero'];

$verificar_id = mysqli_query($conexion, "SELECT * FROM camioneta WHERE matricula = '$matricula'");

$query = "INSERT INTO `camioneta`(`matricula`, `partida`, `llegada`, `destino`, `entregada`, `estado`, `idCamionero`) 
VALUES ('$matricula','$partida', '$llegada', '$destino','$entrega','$estado','$idCamionero')";

if(mysqli_num_rows($verificar_id) < 1){
    
$ejecutar = mysqli_query($conexion, $query);
echo'
<script>
    alert("se ah registrado el camioneta con exito");
    window.location = "../FrontEnd/adminCamioneta.php";
</script>
';
}else{

    echo'
<script>
    alert("la matricula ya existe");
    window.location = "../FrontEnd/adminCamioneta.php";
</script>
';
}
