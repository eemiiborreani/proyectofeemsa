<?php
include('../../apis/server.php');
$almacen = $_POST['almacen'];
$matriculaCamion = $_POST['matriculaCamion'];
$fechaSalida = $_POST['fechaSalida'];
$entregada = $_POST['entregada'];

    $verificar_matricula = mysqli_query($conexion, "SELECT * FROM camion WHERE matricula = '$matriculaCamion'");
    
    $query = "INSERT INTO loteinicial(almacen, matriculaCamion, fechaSalida, entregada) 
    VALUES('$almacen', '$matriculaCamion', '$fechaSalida', '$entregada')";
    
    $verificar_destino = "SELECT 'destino_camion' FROM camion";


if($matriculaCamion == NULL){
    $query = "INSERT INTO loteinicial(almacen, matriculaCamion, fechaSalida, entregada) 
    VALUES('$almacen', 'sin asignar', '$fechaSalida', '$entregada')";

    $ejecutar = mysqli_query($conexion, $query);
    echo'
    <script>
        alert("se ah registrado el lote con exito");
        window.location = "../FrontEnd/ingresarLoteAdmin.php"
    </script>
    ';
}else{
if(mysqli_num_rows($verificar_matricula) > 0){
    
$ejecutar = mysqli_query($conexion, $query);
echo'
<script>
    alert("se ah registrado el lote con exito");
    window.location = "../FrontEnd/ingresarLoteAdmin.php";
</script>
';
} echo'
<script>
    alert("la matricula no existe");
    window.location = "../FrontEnd/ingresarLoteAdmin.php";
</script>
';
}
