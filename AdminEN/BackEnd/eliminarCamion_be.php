<?php
include('../../apis/server.php');
$matricula = $_POST['matricula'];


$query1 = "DELETE FROM `camion` 
WHERE `matricula` = '$matricula'";

$queryUpdate = "UPDATE `loteinicial` 
SET `matriculaCamion`='sin asignar' 
WHERE `matriculaCamion` = '$matricula'";

$queryUpdate2 = "UPDATE `camionero` 
SET `matriculaAsignada`='sin asignar' 
WHERE `matriculaAsignada` = '$matricula'";

$ejecutar = mysqli_query($conexion, $queryUpdate2);
$ejecutar = mysqli_query($conexion, $queryUpdate);
$ejecutar = mysqli_query($conexion, $query1);

echo'
<script>
    alert("se elimino el lote con exito");
    window.location = "../FrontEnd/adminCamion.php";
</script>
';
