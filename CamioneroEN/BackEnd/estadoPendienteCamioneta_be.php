<?php
include('../../apis/server.php');
$matricula = $_POST['matricula'];

$query = "UPDATE `camioneta` 
SET `entregada`= 'pendiente'
WHERE `matricula`= '$matricula'
;";
$ejecutar = mysqli_query($conexion, $query);

$query2 = "UPDATE `paquete` 
SET `entrega`= 'pendiente' 
WHERE `matriculaCamioneta`= '$matricula'
;";
$ejecutar = mysqli_query($conexion, $query2);

$query3 = "UPDATE `loteinicial` 
SET `entregada`= 'pendiente' 
WHERE `matriculaCamion`= '$matricula'
;";
$ejecutar = mysqli_query($conexion, $query3);

echo'
    <script>
    window.location = "../FrontEnd/camionetaIndex.php";
    </script>
';