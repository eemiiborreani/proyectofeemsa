<?php
include('../../apis/server.php');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "INSERT INTO funcionario(username, email, password) 
    VALUES('$username', '$email', '$password')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM funcionario WHERE email = '$email'");



if(mysqli_num_rows($verificar_correo) > 0){
    echo'
    <script>
        alert("Este correo ya esta registrado, prueba con otro diferente");
        window.location = "../FrontEnd/modFunAdmin.php";
    </script>
    ';
    exit();
}

$verificar_usu = mysqli_query($conexion, "SELECT * FROM funcionario WHERE username = '$username'");

if(mysqli_num_rows($verificar_usu) > 0){
    echo'
    <script>
        alert("Este usuario ya esta registrado, prueba con otro diferente");
        window.location = "../FrontEnd/modFunAdmin.php";
    </script>
    ';
    exit();
}

if ($password == "fun333"){

    $ejecutar = mysqli_query($conexion, $query);
    echo'
    <script>
        alert("se ah registrado el funcionario con exito");
        window.location = "../FrontEnd/modFunAdmin.php";
    </script>
    ';
}
else{
    echo'
    <script>
    alert("Contrasenia erronea");
    window.location = "../FrontEnd/modFunAdmin.php";
</script>'
;}
