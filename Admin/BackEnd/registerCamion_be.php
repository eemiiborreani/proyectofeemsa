
<?php
include('../../apis/server.php');
$matricula = $_POST['matricula'];
$partida = $_POST['partida'];
$llegada = $_POST['llegada'];
$destino_camion = $_POST['destino_camion'];
$entrega = $_POST['entregada'];
$estado = $_POST['estado'];
$idCamionero= $_POST['idCamionero'];

$verificar_id = mysqli_query($conexion, "SELECT * FROM camion WHERE matricula = '$matricula'");

$query = "INSERT INTO `camion`(`matricula`, `partida`, `llegada`, `destino_camion`, `entregada`, `estado`, `idCamionero`) 
VALUES ('$matricula','$partida','$llegada','$destino_camion','$entrega','$estado','$idCamionero')";

if(mysqli_num_rows($verificar_id) < 1){
    
$ejecutar = mysqli_query($conexion, $query);
echo'
<script>
    alert("se ah registrado el camion con exito");
    window.location = "../FrontEnd/adminCamion.php";
</script>
';
}else{

    echo'
<script>
    alert("la matricula ya existe");
    window.location = "../FrontEnd/adminCamion.php";
</script>
';
}
