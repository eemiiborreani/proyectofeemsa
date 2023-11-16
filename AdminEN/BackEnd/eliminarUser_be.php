<?php
include('../../apis/server.php');
$id = $_POST['id'];

$query = "DELETE FROM `users` WHERE `id`= $id";
$ejecutar = mysqli_query($conexion, $query);
echo'
<script>
    alert("se elimino el usuario con exito");
    window.location = "../FrontEnd/modUserAdmin.php";
</script>
';