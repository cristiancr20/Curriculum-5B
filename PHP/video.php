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
    <link rel="icon" href="../img/icon.ico">
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
        <video src="https://carontestudio.com/img/f4.mp4" autoplay="true" muted="true" loop="true" class="fondo"></video>
        
        <h1>Audio</h1>
        <div class="wrapper">
            <div class="outer">
                <div class="card" >
                    <div class="content">
                        <div class="img"><img src="../img/img-audio.jfif" alt=""></div>
                        <div class="details">
                            <span class="name">The Only Way Is Up </span>
                            <p>Martin Garrix & Tiësto </p>
                        </div>
                    </div>
                    <div id="playaudio">
                        <a href="#" class="play-btn" onclick="audio()">Listen</a>
                    </div>
                </div>
            </div>
        </div>
        <audio class="audio" id ="audio">
            <source src="../audio.mp3" type="audio/mp3">
        </audio>

        <h1>Video</h1>
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