<?php
    echo '<link href="../CSS/video.css" type:"text/css" rel="stylesheet" > ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

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

    <div class="reproducir">
        
        <video class="player__video"  id="video" >
            <source src="../SanLucas.mp4" type="video/mp4" >
        </video>
        <div class="reproductor">
            <div class="reproducir">
                <div class="player__btn" id="play" >
                    <div class="boton">
                        <i class='bx bxs-left-arrow' ></i>
                    </div>

                    <div class="boton">
                        <i class='bx bx-play play-btn'></i>
                        <i class='bx bx-pause pause-btn hide'></i>
                    </div>

                    <div class="boton">
                        <i class='bx bxs-right-arrow' ></i>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <script src="../JAVASCRIPT/reproducir.js"></script>

</body>
</html>