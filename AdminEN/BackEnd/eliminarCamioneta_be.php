<?php
include('../../apis/server.php');
$matricula = $_POST['matricula'];


$query1 = "DELETE FROM `camioneta` 
WHERE `matricula` = '$matricula'";

$queryUpdate = "UPDATE `paquete` 
SET `matriculaCamioneta`='sin asignar' 
WHERE `matriculaCamioneta` = '$matricula'";

$queryUpdate2 = "UPDATE `camionero` 
SET `matriculaAsignada`='sin asignar' 
WHERE `matriculaAsignada` = '$matricula'";

$ejecutar = mysqli_query($conexion, $queryUpdate2);
$ejecutar = mysqli_query($conexion, $queryUpdate);
$ejecutar = mysqli_query($conexion, $query1);

echo'
<script>
    alert("se elimino la camioneta con exito");
    window.location = "../FrontEnd/adminCamioneta.php";
</script>
';
