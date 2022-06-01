<?php
        echo '<link href="../CSS/Horario.css" type:"text/css" rel="stylesheet" > ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
    <link rel="icon" href="../img/icon.ico">
    
</head>
<body>
    <div class="page">

        <div class="navi">
            <div class="navi-title">
                <a href="Curriculum.php" class="nav-titulo">
                    <div class="titu">Plataformas</div>
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
                    <a href="Calculadora.php">
                        <li>Calculadora</li>
                    </a>
                    <a href="Horario.php">
                        <li>Horario</li>
                    </a>
                    <a href="Slider.php">
                        <li>Slider</li>
                    </a>
                    <a href="../index.php">
                        <li>Salir</li>
                    </a>
                </ul>
            </div>
        </div>

        <h1 class="titulo">Horario</h1>
        
        <div class="boton">
            <button id ="boton" class="waves-effect waves-light btn">
                Json Horario
            </button>
        </div>

            <table >
                <thead>
                    <tr>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miercoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                    </tr>
                </thead>
                
                <tbody id="res">
                
                </tbody>
                
            </table>

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

    <script src="../JAVASCRIPT/Ajax.js"></script>
</body>
</html>