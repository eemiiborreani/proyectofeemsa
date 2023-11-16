<?php
include('../../apis/server.php');
$id = $_POST['id'];
$destino = $_POST['destino'];
$salida = $_POST['salida'];
$matriculaCamioneta = $_POST['matricula'];
$idLote = $_POST['idLote'];

$verificar_id = mysqli_query($conexion, "SELECT * FROM paquete WHERE id = '$id'");
$query = "UPDATE `paquete` SET 
`id`='$id',
`destino`='$destino',
`salida`='$salida',
`matriculaCamioneta`='$matriculaCamioneta'
'idLote' = '$idLote',
 WHERE id = '$id'";

$verificar_matricula = mysqli_query($conexion, "SELECT * FROM camioneta WHERE matricula = '$matriculaCamioneta'");  

if(mysqli_num_rows($verificar_id) > 0){
    if($idLote == NULL){
        $query = "UPDATE `paquete` 
        SET `id`='$id',
        `destino`='$destino',
        `salida`='$salida',
        `matriculaCamioneta`='$matriculaCamioneta',
        `idLote`='sin asignar'
         WHERE id = '$id'";
    }
    
    if($matriculaCamioneta == NULL){
        $query = "UPDATE `paquete` 
        SET `id`='$id',
        `destino`='$destino',
        `salida`='$salida',
        `matriculaCamioneta`='sin asignar',
        `idLote`='$idLote'
         WHERE id = '$id'";
    }
    
    
    if ($matriculaCamioneta == NULL && $idLote == NULL){
        $query = "UPDATE `paquete` 
        SET `id`='$id',
        `destino`='$destino',
        `salida`='$salida',
        `matriculaCamioneta`='sin asignar',
        `idLote`='sin asignar'
         WHERE id = '$id'";
    
        $ejecutar = mysqli_query($conexion, $query);
        echo'
        <script>
            alert("se ah registrado el paquete con exito");
            window.location = "../FrontEnd/ingresarPaqueteAdmin.php";
        </script>
        ';
    }else{
        if(mysqli_num_rows($verificar_matricula) > 0  || $matriculaCamioneta == NULL){
    
    $ejecutar = mysqli_query($conexion, $query);
    echo'
    <script>
        alert("se ah registrado el paquete con exito");
        window.location = "../FrontEnd/ingresarPaqueteAdmin.php";
    </script>
    ';
    } echo'
    <script>
        alert("la matricula no existe");
        window.location = "../FrontEnd/ingresarPaqueteAdmin.php";
    </script>
    ';
    }
}else{   
    echo'
<script>
    alert("no se encontro el id");
    window.location = "../FrontEnd/ingresarPaqueteAdmin.php"
</script>
';
}
