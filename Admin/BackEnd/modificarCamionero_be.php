<?php
include('../../apis/server.php');
$id = $_POST['id'];
$username = $_POST['username'];
$matriculaCamion = $_POST['matriculaCamion'];
$email = $_POST['email'];
$password = $_POST['password'];

$verificar_id = mysqli_query($conexion, "SELECT * 
FROM camionero 
WHERE id = '$id'");


$query = "UPDATE `camionero` SET 
`id`='$id',
`username`='$username',
`matriculaAsignada`='$matriculaCamion',
`email`='$email',
`password`='$password'
 WHERE id = '$id'";

$verificar_matricula = mysqli_query($conexion, "SELECT * 
FROM camion 
WHERE matricula = '$matriculaCamion'"); 

$verificar_matricula3 = mysqli_query($conexion, "SELECT * 
FROM camioneta 
WHERE matricula = '$matriculaCamion'");   





if(mysqli_num_rows($verificar_id) > 0){
    if($matriculaCamion == NULL){
        $query = "UPDATE `camionero` SET 
        `id`='$id',
        `username`='$username',
        `matriculaCamion`='sin asignar',
        `email`='$email',
        `password`='$password'
         WHERE id = '$id'";
     $ejecutar = mysqli_query($conexion, $query);
     echo'
    <script>
    alert("se ah modificado el camionero con exito");
    window.location = "../FrontEnd/ingresarLoteAdmin.php";
    </script>
';
    }else{
        if(mysqli_num_rows($verificar_matricula) > 0 || mysqli_num_rows($verificar_matricula3) > 0 ){
            if($password == "camionero333"){
                
                $query = "UPDATE `camionero` SET 
                `id`='$id',
                `username`='$username',
                `matriculaAsignada`='$matriculaCamion',
                `email`='$email',
                `password`='$password'
                 WHERE id = '$id'";
            
            $ejecutar = mysqli_query($conexion, $query);

            echo'
        <script>
            alert("se ah modificado el camionero con exito");
            window.location = "../FrontEnd/modCamioneroAdmin.php";
        </script>
        '; 
    }else{
        echo'
        <script>
            alert("contraseña no habilitada");
            window.location = "../FrontEnd/modCamioneroAdmin.php";
        </script>
        ';
}}else{
    echo'
<script>
    alert("la matricula no existe");
    window.location = "../FrontEnd/modCamioneroAdmin.php";
</script>
';
}}
}else{   
    echo'
<script>
    alert("no se encontro el id");
    window.location = "../FrontEnd/modCamioneroAdmin.php";
</script>
';
}
