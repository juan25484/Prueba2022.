<?php

include("db.php");


$gce_nombre_equipo = $_POST["gce_nombre_equipo"];
$gce_board = $_POST["gce_board"];
$gce_case = $_POST["gce_case"];
$gce_procesador = $_POST["gce_procesador"];
$gce_teclado = $_POST["gce_teclado"];
$gce_mouse = $_POST["gce_mouse"];
$gce_pantalla = $_POST["gce_pantalla"];
$gce_estado = $_POST["gce_estado"];
$gce_id = $_POST["gce_id"];



$actualizar = "UPDATE gce_caracteristicas SET gce_nombre_equipo='$gce_nombre_equipo', gce_board='$gce_board', gce_case='$gce_case', gce_procesador='$gce_procesador', gce_teclado='$gce_teclado', gce_mouse='$gce_mouse', gce_pantalla='$gce_pantalla', gce_estado='$gce_estado' 
WHERE gce_id='$gce_id'";



$resultado = mysqli_query($conexion, $actualizar);


if ($resultado) {
    echo "<script>alert('Los datos se han actualizado exitosamente'); 
    window.location='/Prueba2022'</script>";
} else {
    echo "<script>alert('Los datos no se han actualizado');
    window.history.go(-1);</script>";
}
