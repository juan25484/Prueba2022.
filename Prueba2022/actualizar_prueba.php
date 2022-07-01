<?php

include("db.php");

$gce_id = $_GET["gce_id"];
$usuarios = "SELECT * FROM gce_caracteristicas WHERE gce_id = '$gce_id'";
$sql = "SELECT *from gce_caracteristicas";
$result = mysqli_query($conexion, $sql);




?>



<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Php y Javascript</title>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500;700;800&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/editar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>

<body>

    <div class="container">
        <header>Editar rol
            <hr>
        </header>
        <form action="procesar_prueba.php" method="post" class="container__form">
            <?php $resultado = mysqli_query($conexion, $usuarios);
            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="form first">
                    <div class="details personal">


                        <div class="fields">
                            <div class="input-field">
                                <input type="text" value="<?php echo $row['gce_nombre_equipo']; ?>" name="gce_nombre_equipo" placeholder="    Nombre del equipo">
                            </div>

                            <div class="input-field">
                                <input value="<?php echo $row['gce_board']; ?>" name="gce_board" type="text" class="container__input" placeholder="    Board">
                            </div>

                            <div class="input-field">

                                <input value="<?php echo $row['gce_case']; ?>" name="gce_case" type="text" class="container__input" placeholder="   Case">
                            </div>


                            <div class="input-field">
                                <input value="<?php echo $row['gce_procesador']; ?>" name="gce_procesador" type="text" class="container__input" placeholder="    Procesador">
                            </div>








                            <div class="input-field">
                                <input value="<?php echo $row['gce_teclado']; ?>" name="gce_teclado" type="text" class="container__input" placeholder="    Teclado">
                            </div>


                            <div class="input-field">
                                <input value="<?php echo $row['gce_mouse']; ?>" name="gce_mouse" type="text" class="container__input" placeholder="    Mouse">
                            </div>


                            <div class="inputs-field">
                                <input value="<?php echo $row['gce_pantalla']; ?>" name="gce_pantalla" type="text" class="container__input" placeholder="    Pantalla">
                            </div>


                            <div class="inputs-field">
                                <select>

                                    <option value="<?php echo $row['gce_estado']; ?>" name="gce_estado" type="text" disabled selected>Estado</option>
                                    <option>Activo</option>
                                    <option>Inactivo</option>

                                </select>

                                <div class="inp-field">
                                <label type="text" value="<?php echo $row['gce_id']; ?>" name="gce_id" placeholder="    Nombre del equipo">
                                </div>

                            </div>







                        <?php

                    }
                    mysqli_free_result($resultado); ?>

                        <button class="actualizar2" type="submit" value="Actualizar">
                            Guardar
                        </button>


        </form>

    </div>









    <script src="js/formulario2.js"></script>
</body>

</html>
