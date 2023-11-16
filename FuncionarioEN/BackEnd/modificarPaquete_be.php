<?php
include('../../apis/server.php');
$id = $_POST['id'];
$destino = $_POST['destino'];
$salida = $_POST['salida'];
$matriculaCamioneta = $_POST['matricula'];
$idLote = $_POST['idLote'];

$verificar_id = mysqli_query($conexion, "SELECT * FROM paquete WHERE id = '$id'");


$verificar_matricula = mysqli_query($conexion, "SELECT * FROM camioneta WHERE matricula = '$matriculaCamioneta'");  

if(mysqli_num_rows($verificar_id) > 0){
    if ($matriculaCamioneta == NULL && $idLote == NULL){
        $query = "UPDATE `paquete` 
        SET `id`='$id',
        `destino`='$destino',
        `salida`='$salida',
        `matriculaCamioneta`='sin asignar',
        `idLote`='sin asignar' 
        WHERE `id` = '$id'";
    
        $ejecutar = mysqli_query($conexion, $query);
        echo'
        <script>
            alert("se ha modificado el paquete con exito");
            window.location = "../FrontEnd/asignarPaqueteCamioneta.php";
        </script>
        ';}else{
    if($idLote == NULL){
        $query = "UPDATE `paquete` 
        SET `id`='$id',
        `destino`='$destino',
        `salida`='$salida',
        `matriculaCamioneta`='$matriculaCamioneta',
        `idLote`='sin asignar' 
        WHERE `id` = '$id'";
        
        $ejecutar = mysqli_query($conexion, $query);
        echo'
        <script>
            alert("se ha modificado el paquete con exito");
            window.location = "../FrontEnd/asignarPaqueteCamioneta.php";
        </script>
        ';

    }else{
        if($matriculaCamioneta == NULL){
        $query = "UPDATE `paquete` 
        SET `id`='$id',
        `destino`='$destino',
        `salida`='$salida',
        `matriculaCamioneta`='sin asignar',
        `idLote`='$idLote' 
        WHERE `id` = '$id'";

        $ejecutar = mysqli_query($conexion, $query);
        echo'
        <script>
            alert("se ha modificado el paquete con exito");
            window.location = "../FrontEnd/asignarPaqueteCamioneta.php";
        </script>
        ';
    }
else{
    if(mysqli_num_rows($verificar_matricula) > 0){
        
        $query = "UPDATE `paquete` 
        SET `id`='$id',
        `destino`='$destino',
        `salida`='$salida',
        `matriculaCamioneta`='$matriculaCamioneta',
        `idLote`='$idLote' 
        WHERE `id` = '$id'";
        $ejecutar = mysqli_query($conexion, $query);
        echo'
        <script>
            alert("se ha modificado el paquete con exito");
            window.location = "../FrontEnd/asignarPaqueteCamioneta.php";
        </script>
        ';
        
    }else{echo'
        <script>
            alert("la matricula no existe");
            window.location = "../FrontEnd/asignarPaqueteCamioneta.php";
        </script>
        ';}
}
}}}else{   
    echo'
<script>
    alert("no se encontro el id");
    window.location = "../FrontEnd/asignarPaqueteCamioneta.php"
</script>
';
}
