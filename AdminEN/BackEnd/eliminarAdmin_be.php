<?php
include('../../apis/server.php');
$id = $_POST['id'];

$query = "DELETE FROM `admin` WHERE `id`= $id";
$ejecutar = mysqli_query($conexion, $query);
echo'
<script>
    alert("se elimino el admin con exito");
    window.location = "../FrontEnd/modAdminAdmin.php";
</script>
';