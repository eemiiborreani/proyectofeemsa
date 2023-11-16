<?php
include('../../apis/server.php');
$id = $_POST['id'];

$query1 = "DELETE FROM `loteinicial` WHERE `id`= $id";

$ejecutar = mysqli_query($conexion, $query1);

echo'
<script>
    alert("se elimino el lote con exito");
    window.location = "../FrontEnd/asignarLoteCamion.php";
</script>
';