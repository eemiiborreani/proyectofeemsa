<?php
include('../../apis/server.php');
$matricula = $_POST['matricula'];
$partida = $_POST['partida'];
$llegada = $_POST['llegada'];
$destino = $_POST['destino'];
$entregada = $_POST['entregada'];
$estado = $_POST['estado'];
$idCamionero= $_POST['idCamionero'];

$verificar_id = mysqli_query($conexion, "SELECT * FROM camioneta WHERE matricula = '$matricula'");
$query = "UPDATE `camioneta` SET 
`matricula`='$matricula',
`partida`='$partida',
`llegada`='$llegada',
`destino`='$destino',
`entregada`='$entregada' 
`estado`='$estado',
`idCamionero`='$idCamionero'
WHERE matricula = '$matricula'"; 
if(mysqli_num_rows($verificar_id) > 0){
        $ejecutar = mysqli_query($conexion, $query);
    echo'
<script>
    alert("se ah modificado el camioneta con exito");
    window.location = "../FrontEnd/adminCamioneta.php";
</script>
';}else{
    echo'
<script>
    alert("la matricula no existe");
    window.location = "../FrontEnd/adminCamioneta.php";
</script>
';
}
