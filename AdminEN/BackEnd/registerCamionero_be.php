<?php
include('../../apis/server.php');
$username = $_POST['username'];
$matriculaCamion = $_POST['matriculaCamion'];
$email = $_POST['email'];
$password = $_POST['password'];

$verificar_matricula = mysqli_query($conexion, "SELECT * 
FROM camion 
WHERE matricula = '$matriculaCamion'");

$verificar_matricula3 = mysqli_query($conexion, "SELECT * 
FROM camioneta 
WHERE matricula = '$matriculaCamion'
");

$verificar_matricula2 = mysqli_query($conexion, "SELECT * 
FROM camionero 
WHERE matriculaAsignada = '$matriculaCamion'
");


$query = "INSERT INTO camionero(username, matriculaAsignada, email, password) 
    VALUES('$username', '$matriculaCamion', '$email', '$password')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM camionero WHERE email = '$email'");



if(mysqli_num_rows($verificar_correo) > 0){
    echo'
    <script>
        alert("Este correo ya esta registrado, prueba con otro diferente");
        window.location = "../FrontEnd/modCamioneroAdmin.php";
    </script>
    ';
    exit();
}

$verificar_usu = mysqli_query($conexion, "SELECT * FROM camionero WHERE username = '$username'");

if(mysqli_num_rows($verificar_usu) > 0){
    echo'
    <script>
        alert("Este usuario ya esta registrado, prueba con otro diferente");
        window.location = "../FrontEnd/modCamioneroAdmin.php";
    </script>
    ';
    exit();
}

if ($password == "camionero333"){

if($matriculaCamion == NULL){
    $query = "INSERT INTO camionero(username, matriculaCamion, email, password) 
    VALUES('$username', 'sin asignar', '$email', '$password')";


    $ejecutar = mysqli_query($conexion, $query);
    echo'
    <script>
        alert("se ah registrado el camionero con exito");
        window.location = "../FrontEnd/modCamioneroAdmin.php";
    </script>
    ';
}else{
    if(mysqli_num_rows($verificar_matricula3) > 0 || mysqli_num_rows($verificar_matricula) > 0){
    if(mysqli_num_rows($verificar_matricula2) < 1){
        $ejecutar = mysqli_query($conexion, $query);
        echo'
        <script>
            alert("se ah registrado el camionero con exito");
            window.location = "../FrontEnd/modCamioneroAdmin.php";
        </script>
        ';
    }else{
        echo'
        <script>
        alert("matricula ya utilizada");
        window.location = "../FrontEnd/modCamioneroAdmin.php";
    </script>'
    ;  
    }} echo'
<script>
    alert("la matricula no existe");
    window.location = "../FrontEnd/modCamioneroAdmin.php";
</script>
';
}}
else{
    echo'
    <script>
    alert("Contrasenia erronea");
    window.location = "../FrontEnd/modCamioneroAdmin.php";
</script>'
;}
