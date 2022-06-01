<?php
    echo '<link href="../CSS/Slider.css" type:"text/css" rel="stylesheet" > ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
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
                    <a href="calculadora.php">
                        <li>Calculadora</li>
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

        <h1>Slider</h1>
        <div class="slide">
			<div class="slide-inner">
				<input class="slide-open" type="radio" id="slide-1" name="slide" aria-hidden="true" hidden="" checked="checked">
				<div class="slide-item">
					<img src="../img/img_1.jpg">
				</div>
				<input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="../img/img_2.jpg">
				</div>
				<input class="slide-open" type="radio" id="slide-3" name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="../img/img_3.jpg">
				</div>

                <input class="slide-open" type="radio" id="slide-4" name="slide" aria-hidden="true" hidden="">
				<div class="slide-item">
					<img src="../img/img_4.jpg">
				</div>
                
				<label for="slide-4" class="slide-control next control-3">›</label>
				<label for="slide-4" class="slide-control prev control-1">‹</label>
                
                <label for="slide-3" class="slide-control next control-2">›</label>
				<label for="slide-3" class="slide-control prev control-4">‹</label>

				<label for="slide-2" class="slide-control next control-1">›</label>
				<label for="slide-2" class="slide-control prev control-3">‹</label>
                
				<label for="slide-1" class="slide-control next control-4">›</label>
				<label for="slide-1" class="slide-control prev control-2">‹</label>

				<ol class="slide-indicador">
					<li>
						<label for="slide-1" class="slide-circulo">•</label>
					</li>
					<li>
						<label for="slide-2" class="slide-circulo">•</label>
					</li>
					<li>
						<label for="slide-3" class="slide-circulo">•</label>
					</li>
                    <li>
						<label for="slide-4" class="slide-circulo">•</label>
					</li>
				</ol>
			</div>
		</div>
    </div>

</body>
</html>