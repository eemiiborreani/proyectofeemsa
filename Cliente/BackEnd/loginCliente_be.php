<?php

session_start();

include '../../apis/server.php';

$username = $_POST['username'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM users 
WHERE username='$username' and password='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuarioCliente'] = $username;
    header("location: ../FrontEnd/IndexClientes.php");
    exit;
}else{
    echo'
    <script>
    window.location = "../FrontEnd/loginRegisterClienteIndex.php";
    alert("Cliente no existe, por favor verifique los datos introducidos");
    </script>
    ';
    exit;
}
?>