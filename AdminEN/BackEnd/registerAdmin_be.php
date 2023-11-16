<?php
include('../../apis/server.php');
$username = $_POST['username'];
$email = $_POST['email'];
$contrasena = $_POST['password_1'];
$contrasena2 = $_POST['password_2'];

if($contrasena == $contrasena2){
    if($contrasena == "admin333"){
    $query = "INSERT INTO admin(username, email, password) 
    VALUES('$username', '$email', '$contrasena')";
}else{
    echo'
    <script>
        alert("contraseña no habilitada");
        window.location = "../FrontEnd/loginRegisterAdministradorIndex.php";
    </script>
    ';
}}else{
    echo'
    <script>
        alert("no es la misma contraseña");
        window.location = "../FrontEnd/loginRegisterAdministradorIndex.php";
    </script>
    ';
    exit();
}




$verificar_correo = mysqli_query($conexion, "SELECT * FROM admin WHERE email = '$email'");

if(mysqli_num_rows($verificar_correo) > 0){
    echo'
    <script>
        alert("Este correo ya esta registrado, prueba con otro diferente");
        window.location = "../FrontEnd/loginRegisterAdministradorIndex.php";
    </script>
    ';
    exit();
}
$verificar_usu = mysqli_query($conexion, "SELECT * FROM admin WHERE username = '$username'");

if(mysqli_num_rows($verificar_usu) > 0){
    echo'
    <script>
        alert("Este usuario ya esta registrado, prueba con otro diferente");
        window.location = "../FrontEnd/loginRegisterAdministradorIndex.php";
    </script>
    ';
    exit();
}
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo'
    <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../FrontEnd/loginRegisterAdministradorIndex.php";
    </script>
    ';
}else{
    echo'
    <script>
    alert("Intentalo denuevo, usuario    no almacenado");
    window.location = "../FrontEnd/loginRegisterAdministradorIndex.php";
    </script>
    ';
}
?>