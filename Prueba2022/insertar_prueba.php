<?php

include("db.php");
$gce_nombre_equipo = $_POST["gce_nombre_equipo"];
$gce_board = $_POST["gce_board"];
$gce_case = $_POST["gce_case"];
$gce_procesador = $_POST["gce_procesador"];
$gce_grafica = $_POST["gce_grafica"];
$gce_ram = $_POST["gce_ram"];
$gce_disco_duro = $_POST["gce_disco_duro"];
$gce_teclado = $_POST["gce_teclado"];
$gce_mouse = $_POST["gce_mouse"];
$gce_pantalla = $_POST["gce_pantalla"];
$gce_estado = $_POST["gce_estado"];



$insertar = "INSERT INTO gce_caracteristicas(gce_nombre_equipo, gce_board, gce_case, gce_procesador, gce_grafica, gce_ram, gce_disco_duro, gce_teclado, gce_mouse, gce_pantalla, gce_estado) VALUES 
('$gce_nombre_equipo', '$gce_board', '$gce_case', '$gce_procesador','$gce_grafica' , '$gce_ram' ,'$gce_disco_duro', '$gce_teclado', '$gce_mouse', '$gce_pantalla', '$gce_estado')";


$resultado= mysqli_query($conexion, $insertar);
if($resultado){
    echo "<script>alert('Se ha registrado correctamente'); 
    window.location='/Prueba2022/index.php'</script>";
}else{
    echo "<script>alert('No se pudo registrar , intente nuevamente');
    window.history.go(-1);</script>";
}
