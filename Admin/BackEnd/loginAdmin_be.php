<?php
session_start();

include '../../apis/server.php';

$username = $_POST['username'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM admin
WHERE username='$username' and password='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuarioAdmin'] = $username;
    header("location: ../FrontEnd/IndexAdministrador.php");
    exit;
}else{
    echo'
    <script>
    alert("Administrador no existe, por favor verifique los datos introducidos");
    window.location = "../FrontEnd/loginRegisterAdministradorIndex.php";
    </script>
    ';
    exit;
}
?>