<?php
include('../../apis/server.php');
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$verificar_id = mysqli_query($conexion, "SELECT * 
FROM users 
WHERE id = '$id'");

$query = "UPDATE `users` SET 
`id`='$id',
`username`='$username',
`email`='$email',
`password`='$password'
 WHERE id = '$id'";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM users WHERE email = '$email'");



if(mysqli_num_rows($verificar_id) > 0){
     $ejecutar = mysqli_query($conexion, $query);
     echo'
    <script>
    alert("se ah modificado el usuario con exito");
    window.location = "../FrontEnd/modUserAdmin.php";
    </script>
';
    }else{
    echo'
<script>
    alert("no se encontro el id");
    window.location = "../FrontEnd/modUserAdmin.php";
</script>
';
}
