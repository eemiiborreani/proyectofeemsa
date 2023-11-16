<?php
include('../../apis/server.php');
$id = $_POST['id'];
$almacen = $_POST['almacen'];
$matriculaCamion = $_POST['matriculaCamion'];
$fechaSalida = $_POST['salida'];
$entregada = $_POST['entrega'];

$verificar_id = mysqli_query($conexion, "SELECT * FROM loteinicial WHERE id = '$id'");
$query = "UPDATE `loteinicial` SET 
`id`='$id',
`almacen`='$almacen',
`matriculaCamion`='$matriculaCamion',
`fechaSalida`='$fechaSalida',
`entregada`='$entregada'
 WHERE id = '$id'";

$verificar_matricula = mysqli_query($conexion, "SELECT * FROM camion WHERE matricula = '$matriculaCamion'");  

if(mysqli_num_rows($verificar_id) > 0){
    if($matriculaCamion == NULL){
        $query = "UPDATE `loteinicial` SET 
        `id`='$id',
        `almacen`='$almacen',
        `matriculaCamion`='sin asignar',
        `fechaSalida`='$fechaSalida',
        `entregada`='$entregada'
         WHERE id = '$id'";
     $ejecutar = mysqli_query($conexion, $query);
     echo'
    <script>
    alert("se ah modificado el lote con exito");
    window.location = "../FrontEnd/ingresarLoteAdmin.php";
    </script>
';
    }else{
    if(mysqli_num_rows($verificar_id) > 0){

        $ejecutar = mysqli_query($conexion, $query);
    echo'
<script>
    alert("se ah modificado el lote con exito");
    window.location = "../FrontEnd/ingresarloteAdmin.php";
</script>
';}else{
    echo'
<script>
    alert("la matricula no existe");
    window.location = "../FrontEnd/ingresarLoteAdmin.php";
</script>
';
}}
}else{   
    echo'
<script>
    alert("no se encontro el id");
    window.location = "../FrontEnd/ingresarLoteAdmin.php";
</script>
';
}
