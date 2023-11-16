<?php
session_start();

include '../../apis/server.php';

$username = $_POST['username'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM camionero 
WHERE username='$username' and password='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuarioCamionero'] = $username;
    header("location: ../FrontEnd/IndexCamionero.php");
    exit;
}else{
    echo'
    <script>
    window.location = "../FrontEnd/loginRegisterCamioneroIndex.php";
    alert("Camionero no existe, por favor verifique los datos introducidos");
    </script>
    ';
    exit;
}
?>