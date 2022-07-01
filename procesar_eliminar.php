<?php

include("db.php");

$gce_id = $_GET['gce_id'];

$eliminar ="DELETE FROM gce_caracteristicas WHERE gce_id = '$gce_id'";


$resultadoEliminar = mysqli_query($conexion, $eliminar);

if ($resultadoEliminar) {
   header("Location: index.php");
} else {
    echo "<script>alert('No se pudo eliminar');
    window.history.go(-1);</script>";
}