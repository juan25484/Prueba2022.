<?php

include("db.php");

$usuarios = "SELECT * FROM gce_caracteristicas";
$sql = "SELECT *from gce_caracteristicas";
$result = mysqli_query($conexion, $sql);



?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Php y Javascript</title>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500;700;800&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>

<header><b>Editar rol</b>

    <table class="content-table">
        <thead>






            <tr>

                <th><b>Nombre</b></th>
                <th><b>Board</b></th>
                <th><b>Case</b></th>
                <th><b>Procesador</b></th>
                <th><b>Gráfica</b></th>
                <th><b>Ram</b></th>
                <th><b>Disco</b></th>
                <th><b>Teclado</b></th>
                <th><b>Mouse</b></th>
                <th><b>Pantalla</b></th>
                <th><b>Estado</b></th>
                <th><b>Operacion</b></th>







            </tr>


        </thead>

        <tbody>
            <tr>
                <?php $resultado = mysqli_query($conexion, $usuarios);
                while ($row = mysqli_fetch_assoc($resultado)) { ?>

                    <td><?php echo $row['gce_nombre_equipo']; ?></td>
                    <td><?php echo $row['gce_board']; ?></td>
                    <td><?php echo $row['gce_case']; ?></td>
                    <td><?php echo $row['gce_procesador']; ?></td>
                    <td><?php echo $row['gce_grafica']; ?></td>
                    <td><?php echo $row['gce_ram']; ?></td>
                    <td><?php echo $row['gce_disco_duro']; ?></td>
                    <td><?php echo $row['gce_teclado']; ?></td>
                    <td><?php echo $row['gce_mouse']; ?></td>
                    <td><?php echo $row['gce_pantalla']; ?></td>
                    <td><?php echo $row['gce_estado']; ?></td>
       

                    <td>
                    <a href="actualizar_prueba.php?gce_id=<?php echo $row["gce_id"]; ?>"><i class="fas fa-pencil-alt"></i></i>
    </a>
                     



                    </td>
            </tr>
        <?php }
                mysqli_free_result($resultado); ?>
        </div>
        </tbody>







    </table>


    </div>



    </div>