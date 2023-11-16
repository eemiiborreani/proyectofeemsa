<?php
include('../../apis/server.php');
$matricula = $_POST['matricula'];
$partida = $_POST['partida'];
$llegada = $_POST['llegada'];
$destino_camion = $_POST['destino_camion'];
$entregada = $_POST['entregada'];
$estado = $_POST['estado'];
$idCamionero= $_POST['idCamionero'];

$verificar_id = mysqli_query($conexion, "SELECT * FROM camion WHERE matricula = '$matricula'");
$query = "UPDATE `camion` SET 
`matricula`='$matricula',
`partida`='$partida',
`llegada`='$llegada',
`destino_camion`='$destino_camion',
`entregada`='$entregada' 
`estado`='$estado',
`idCamionero`='$idCamionero'
WHERE matricula = '$matricula'"; 
if(mysqli_num_rows($verificar_id) > 0){
        $ejecutar = mysqli_query($conexion, $query);
    echo'
<script>
    alert("se ah modificado el camion con exito");
    window.location = "../FrontEnd/adminCamion.php";
</script>
';}else{
    echo'
<script>
    alert("la matricula no existe");
    window.location = "../FrontEnd/adminCamion.php";
</script>
';
}
