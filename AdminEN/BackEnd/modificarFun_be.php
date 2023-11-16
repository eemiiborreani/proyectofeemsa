<?php
include('../../apis/server.php');
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$verificar_id = mysqli_query($conexion, "SELECT * 
FROM funcionario
WHERE id = '$id'");

$query = "UPDATE `funcionario` SET 
`id`='$id',
`username`='$username',
`email`='$email',
`password`='$password'
 WHERE id = '$id'";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM funcionario WHERE email = '$email'");





if(mysqli_num_rows($verificar_id) > 0){
    
    if($password == "fun333"){
        $ejecutar = mysqli_query($conexion, $query);
        echo'
       <script>
       alert("se ha modificado el funcionario con exito");
       window.location = "../FrontEnd/modFunAdmin.php";
       </script>
   ';
    }else{
        echo'
        <script>
            alert("contraseña no habilitada");
            window.location = "../FrontEnd/modFunAdmin.php";
        </script>
        ';
    }
    }else{   
    echo'
<script>
    alert("no se encontro el id");
    window.location = "../FrontEnd/modFunAdmin.php";
</script>
';
}
