<?php
    echo '<link href="../CSS/Calculadora.css" type:"text/css" rel="stylesheet" > ';
?>

<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title> 
    <script type="text/javascript" src="../JAVASCRIPT/calculadora.js"></script>
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

        <h1>Calculadora</h1>
        
        <div class="calculadora">
            <form name="calculator">
                <div class="respuesta">
                    <input type="textfield" name ="ans" value="" autocomplete="off" readonly>
                </div>
<br>
                <input type="button" value="7" onclick="document.calculator.ans.value+='7'">
                <input type="button" value="8" onclick="document.calculator.ans.value+='8'">
                <input type="button" value="9" onclick="document.calculator.ans.value+='9'">
                <input type="button" value="+" onclick="document.calculator.ans.value+='+'">
<br>
                <input type="button" value="4" onclick="document.calculator.ans.value+='4'">
                <input type="button" value="5" onclick="document.calculator.ans.value+='5'">
                <input type="button" value="6" onclick="document.calculator.ans.value+='6'">
                <input type="button" value="-" onclick="document.calculator.ans.value+='-'">
<br>
                <input type="button" value="1" onclick="document.calculator.ans.value+='1'"> 
                <input type="button" value="2" onclick="document.calculator.ans.value+='2'">
                <input type="button" value="3" onclick="document.calculator.ans.value+='3'">
                <input type="button" value="X" onclick="document.calculator.ans.value+='*'">
<br>
                <input type="button" value="0" onclick="document.calculator.ans.value+='0'">
                <input type="reset" value="C" >
                <input type="button" value="=" onclick="document.calculator.ans.value=eval(document.calculator.ans.value)">
                <input type="button" value="/" onclick="document.calculator.ans.value+='/'">
            </form>
        </div>
    </div>
</body>
</html>