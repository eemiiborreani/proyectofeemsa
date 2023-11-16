<?php
include('../../apis/server.php');
$username = $_POST['username'];
$matriculaCamion = $_POST['matriculaCamion'];
$email = $_POST['email'];
$contrasena = $_POST['password_1'];
$contrasena2 = $_POST['password_2'];

$verificar_matricula = mysqli_query($conexion, "SELECT * FROM camion WHERE matricula = '$matriculaCamion'");
$verificar_matricula2 = mysqli_query($conexion, "SELECT * FROM camioneta WHERE matricula = '$matriculaCamion'");
if($matriculaCamion == NULL){
    $query = "INSERT INTO camionero(username, matriculaAsignada, email, password) 
    VALUES('$username', 'sin asignar', '$email', '$password')";


    $ejecutar = mysqli_query($conexion, $query);
    echo'
    <script>
        alert("se ah registrado el camionero con exito");
        window.location = "../FrontEnd/loginRegisterCamioneroIndex.php";
    </script>
    ';
}else
if(mysqli_num_rows($verificar_matricula) > 0 || mysqli_num_rows($verificar_matricula2) > 0){
    if($contrasena == $contrasena2){
        if($contrasena == "camionero333"){
        $query = "INSERT INTO camionero(username, matriculaAsignada, email, password) 
        VALUES('$username', '$matriculaCamion' '$email', '$contrasena')";
    }else{
        echo'
        <script>
            alert("contraseña no habilitada");
            window.location = "../FrontEnd/loginRegisterCamioneroIndex.php";
        </script>
        ';
    }}else{
        echo'
        <script>
            alert("no es la misma contraseña");
            window.location = "../FrontEnd/loginRegisterCamioneroIndex.php";
        </script>
        ';
        exit();
    }
    
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM camionero WHERE email = '$email'");
    
    if(mysqli_num_rows($verificar_correo) > 0){
        echo'
        <script>
            alert("Este correo ya esta registrado, prueba con otro diferente");
            window.location = "../FrontEnd/loginRegisterCamioneroIndex.php";
        </script>
        ';
        exit();
    }
    $verificar_usu = mysqli_query($conexion, "SELECT * FROM camionero WHERE username = '$username'");
    
    if(mysqli_num_rows($verificar_usu) > 0){
        echo'
        <script>
            alert("Este usuario ya esta registrado, prueba con otro diferente");
            window.location = "../FrontEnd/loginRegisterCamioneroIndex.php";
        </script>
        ';
        exit();
    }
    $ejecutar = mysqli_query($conexion, "INSERT INTO camionero(username, matriculaAsignada, email, password) 
    VALUES('$username', '$matriculaCamion', '$email', '$contrasena')");
    
    if($ejecutar){
        echo'
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../FrontEnd/loginRegisterCamioneroIndex.php";
        </script>
        ';
    }else{
        echo'
        <script>
        alert("Intentalo denuevo, usuario no almacenado");
        window.location = "../FrontEnd/loginRegisterCamioneroIndex.php";
        </script>
        ';
    }
    
}else{echo'
    <script>
        alert("la matricula no existe");
        window.location = "../FrontEnd/loginRegisterCamioneroIndex.php";
    </script>
    ';
}
?>
