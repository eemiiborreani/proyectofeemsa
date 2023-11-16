<?php
include('../../apis/server.php');
$destino = $_POST['destino'];
$salida = $_POST['salida'];
$matricula = $_POST['matriculaCamioneta'];
$idLote = $_POST['idLote'];

$verificar_matricula = mysqli_query($conexion, "SELECT * FROM camioneta WHERE matricula = '$matricula'");
$verificar_lote = mysqli_query($conexion, "SELECT * FROM loteinicial WHERE id = '$idLote'");

$query = "INSERT INTO paquete(destino, salida, entrega, matriculaCamioneta, idLote) 
    VALUES('$destino', '$salida', 'sin realizar', '$matricula', '$idLote')";


if($idLote == NULL){
    $query = "INSERT INTO paquete(destino, salida, entrega, matriculaCamioneta, idLote) 
    VALUES('$destino', '$salida', 'sin realizar', '$matricula', 'sin asignar')";
}

if($matricula == NULL){
    $query = "INSERT INTO paquete(destino, salida, entrega, matriculaCamioneta, idLote) 
    VALUES('$destino', '$salida', 'sin realizar', 'sin asignar', '$idLote')";
}


if ($matricula == NULL && $idLote == NULL){
    $query = "INSERT INTO paquete(destino, salida, entrega, matriculaCamioneta, idLote) 
    VALUES('$destino', '$salida', 'sin realizar', 'sin asignar', 'sin asignar')";

    $ejecutar = mysqli_query($conexion, $query);
    echo'
    <script>
        alert("se ah registrado el paquete con exito");
        window.location = "../FrontEnd/ingresarPaqueteAdmin.php";
    </script>
    ';
}else{
    if(mysqli_num_rows($verificar_matricula) > 0  || $matricula == NULL){

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
