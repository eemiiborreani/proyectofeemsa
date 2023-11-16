<?php
include('../../apis/server.php');
$matricula = $_POST['matricula'];

$query = "UPDATE `camion` 
SET `entregada`= 'Realizado' 
WHERE `matricula`= '$matricula'
;";
$ejecutar = mysqli_query($conexion, $query);

$query2 = "UPDATE `loteinicial` 
SET `entregada`= 'Realizado' 
WHERE `matriculaCamion`= '$matricula'
;";
$ejecutar = mysqli_query($conexion, $query2);

$query3 = "UPDATE `paquete` 
SET `entrega`= 'Realizado' 
WHERE `matriculaCamioneta`= '$matricula'
;";
$ejecutar = mysqli_query($conexion, $query3);

echo'
    <script>
    window.location = "../FrontEnd/camionIndex.php";
    </script>
';