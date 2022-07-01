<!DOCTYPE html>
<html lang="en">

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

<body>
    <div class="container">
        <header><b>Registro computadores</b>
            <img src="img/gc-icon.png" class="logo">


        </header>


        <form action="insertar_prueba.php" method="post" class="container__form">
            <div class="form_first">
                <div class="details personal">

                    <div class="fields">

                        <div class="input-field">
                            <label></label>
                            <input name="gce_nombre_equipo" type="text" class="container__input" placeholder="    Nombre del equipo">


                        </div>

                        <div class="input-field">
                            <label></label>
                            <input name="gce_board" type="text" class="container__input" placeholder="    Board">



                        </div>

                        <div class="input-field">
                            <label></label>
                            <input name="gce_case" type="text" class="container__input" placeholder="   Case">



                        </div>

                        <div class="input-field">
                            <label></label>
                            <input name="gce_procesador" type="text" class="container__input" placeholder="    Procesador">



                        </div>

                        <div class="input-field">
                            <label></label>
                            <input name="gce_grafica" type="text" class="container__input" placeholder="    Grafica">



                        </div>

                        <div class="input-field">
                            <label></label>
                            <input name="gce_ram" type="text" class="container__input" placeholder="    Ram">



                        </div>

                        <div class="input-field">
                            <label></label>
                            <input name="gce_disco_duro" type="text" class="container__input" placeholder="    Disco">



                        </div>

                        <div class="input-field">
                            <label></label>
                            <input name="gce_teclado" type="text" class="container__input" placeholder="    Teclado">



                        </div>

                        <div class="input-field">
                            <label></label>
                            <input name="gce_mouse" type="text" class="container__input" placeholder="    Mouse">


                        </div>

                        <div class="inputs-field">
                            <label></label>
                            <input name="gce_pantalla" type="text" class="container__input" placeholder="    Pantalla">

                        </div>

                        <div class="inputs-field">
                            <select>

                                <option name="gce_estado" type="text" disabled selected>Estado</option>
                                <option>Activo</option>
                                <option>Inactivo</option>

                            </select>
                        </div>

                        <button class="sumbit">
                            <i class="fa-solid fa-square-plus"></i>
                            <span class="btnText">Agregar</span>
                        </button>




                    </div>




                </div>



        </form>


        <header><b>Computadores</b>

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
                        <th><b></b></th>







                    </tr>


                </thead>

                <tbody>

                    <?php

                    include("db.php");

                    $usuarios = "SELECT * FROM gce_caracteristicas";
                    $sql = "SELECT *from gce_caracteristicas";
                    $result = mysqli_query($conexion, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {

                    ?>

                        <tr>
                            <td><?php echo $mostrar['gce_nombre_equipo'] ?></td>
                            <td><?php echo $mostrar['gce_board'] ?></td>
                            <td><?php echo $mostrar['gce_case'] ?></td>
                            <td><?php echo $mostrar['gce_procesador'] ?></td>

                            <td><?php echo $mostrar['gce_grafica'] ?></td>
                            <td><?php echo $mostrar['gce_ram'] ?></td>
                            <td><?php echo $mostrar['gce_disco_duro'] ?></td>
                            <td> <?php echo $mostrar['gce_teclado'] ?></td>
                            <td><?php echo $mostrar['gce_mouse'] ?></td>
                            <td><?php echo $mostrar['gce_pantalla'] ?></td>
                            <td><?php echo $mostrar['gce_estado'] ?></td>
                            <td>
                                <a href="edicion_prueba.php">
                                    <div class="option">
                                        <i class="fas fa-pencil-alt"></i>

                                    </div>
                                </a>
                            </td>

                            <td>
                            <a href="procesar_eliminar.php?gce_id=<?php echo $row["gce_id"]; ?>" class="table__item__link"><i class="fa-solid fa-trash"></i></a>
                                    <div class="option">
                                       

                                    </div>
                                </a>
                            </td>

                            


                            <script src="js/confirmacion.js"></script>



                        </tr>
                    <?php
                    }
                    ?>

                </tbody>







            </table>


    </div>



    </div>








</body>

</html>