<?php
        echo '<link href="../CSS/tabla.css" type:"text/css" rel="stylesheet" > ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<body>
<div class="page">

   
        <div class="nav">
            <div class="nav-title">
                <a href="Curriculum.php">
                    <h3>Plataformas</h3>
                </a>
            </div>
            <div class="nav-options">
                <ul>
                    <a href="Curriculum.php">
                        <li>Curriculum</li>
                    </a>
                    <a href="video.php">
                        <li>Video</li>
                    </a>
                    <a href="tabla.php">
                        <li>Tabla</li>
                    </a>
                    <a href="horario.php">
                        <li>Horario</li>
                    </a>
                    <a href="slider.php">
                        <li>Slider</li>
                    </a>
                    <a href="index.php">
                        <li>Salir</li>
                    </a>
                </ul>
            </div>
        </div>
    <h1>Listado Estudiantes de 5to B DBP</h1>

    <?php


        $xml = simplexml_load_file('../Estudiantes.xml');

        echo '<table  >';

        echo '<th>Cedula </th>';
        echo '<th>Nombre </th>';
        echo '<th>Apellido</th>';
        echo '<th>Celular</th>';
        echo '<th>Carrera</th>';
        //cargar en la tabla
            foreach ($xml -> estudiante as $key0 => $est ){

                echo '<tr>';
                echo '<td>'.$est-> cedula.'</td>';
                echo "<td>".$est ->nombre. "</td>";
                echo "<td>".$est ->apellido. "</td>";
                echo "<td>".$est ->celular. "</td>";
                echo "<td>".$est ->carrera. "</td>";
                echo '</tr>';
            }

        echo '</table>';
    ?>
</div>


</body>
</html>
