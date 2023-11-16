<?php

session_start();

include '../../apis/server.php';

$username = $_POST['username'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM funcionario 
WHERE username='$username' and password='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuarioFuncionario'] = $username;
    header("location: ../FrontEnd/IndexFuncionario.php");
    exit;
}else{
    echo'
    <script>
    window.location = "../FrontEnd/loginRegisterFuncionarioIndex.php";
    alert("Funcionario no existe, por favor verifique los datos introducidos");
    </script>
    ';
    exit;
}
?>