<?php
include('../../apis/server.php');
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$verificar_id = mysqli_query($conexion, "SELECT * 
FROM admin
WHERE id = '$id'");

$query = "UPDATE `admin` SET 
`id`='$id',
`username`='$username',
`email`='$email',
`password`='$password'
 WHERE id = '$id'";


if(mysqli_num_rows($verificar_id) > 0){
    if($password == "admin333"){
        $ejecutar = mysqli_query($conexion, $query);
     echo'
    <script>
    alert("se ah modificado el admin con exito");
    window.location = "../FrontEnd/modAdminAdmin.php";
    </script>
';
    }else{
        echo'
        <script>
            alert("contraseña no habilitada");
            window.location = "../FrontEnd/modAdminAdmin.php";
        </script>
        ';
    }
    }else{   
    echo'
<script>
    alert("no se encontro el id");
    window.location = "../FrontEnd/modAdminAdmin.php";
</script>
';
}
