<?php
include('../../apis/server.php');
$id = $_POST['id'];

$query = "DELETE FROM `paquete` WHERE `id`= $id";
$ejecutar = mysqli_query($conexion, $query);
echo'
<script>
    alert("se elimino el paquete con exito");
    window.location = "../FrontEnd/asignarPaqueteCamioneta.php";
</script>
';