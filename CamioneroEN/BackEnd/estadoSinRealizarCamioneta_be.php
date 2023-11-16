<?php
include('../../apis/server.php');
$matricula = $_POST['matricula'];

$query = "UPDATE `camioneta` 
SET `entregada`= 'Sin Realizar' 
WHERE `matricula`= '$matricula'
;";
$ejecutar = mysqli_query($conexion, $query);

$query2 = "UPDATE `paquete` 
SET `entrega`= 'Sin Realizar' 
WHERE `matriculaCamioneta`= '$matricula'
;";
$ejecutar = mysqli_query($conexion, $query2);

$query3 = "UPDATE `loteInicial` 
SET `entregada`= 'Sin Realizar' 
WHERE `matriculaCamion`= '$matricula'
;";
$ejecutar = mysqli_query($conexion, $query3);


echo'
    <script>
    window.location = "../FrontEnd/camionetaIndex.php";
    </script>
';