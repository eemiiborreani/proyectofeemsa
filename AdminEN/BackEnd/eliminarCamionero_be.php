<?php
include('../../apis/server.php');
$id = $_POST['id'];

$query = "DELETE FROM `camionero` WHERE `id`= $id";
$ejecutar = mysqli_query($conexion, $query);
echo'
<script>
    alert("se elimino el camionero con exito");
    window.location = "../FrontEnd/modCamioneroAdmin.php";
</script>
';