<?php
include('../../apis/server.php');
$id = $_POST['id'];

$query = "DELETE FROM `funcionario` WHERE `id`= $id";
$ejecutar = mysqli_query($conexion, $query);
echo'
<script>
    alert("se elimino el funcionario con exito");
    window.location = "../FrontEnd/modFunAdmin.php";
</script>
';