<?php
    echo '<link href="../CSS/Curriculum.css" type:"text/css" rel="stylesheet" > ';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    <link rel="icon" href="../img/icon.ico">
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
        
       
        <h1>Curriculum</h1>
        <h2>Datos Personales</h2>
        <div class="datos">
            <div class="dato">
                <h4>Nombre:</h4>
                <div class="datos-info">
                    <p>Cristian Ramiro Capa Rodriguez</p>
                </div>
            </div>
            <div class="dato">
                <h4>Edad:</h4>
                <div class="datos-info">
                    <p>21 Años</p>
                </div>
            </div>
            <div class="dato">
                <h4>Educación: </h4>
                <div class="datos-info">
                    <p>Universidad Nacional de Loja.</p>
                </div>
            </div>
            <div class="dato">
                <h4>Habilidades: </h4>
                <div class="datos-info">
                    <p>Conocimientos sobre HTML, CSS, JavaScript también conozco sobre React la cual trabaja por componentes.</p>
                </div>
            </div>

            <div class="dato">
                <h4>Trabajos y Experiencia:</h4>
                <div class="datos-info">
                    <p>Realice una pagina web para una radio llamada Semillas de Amor esta fue realizada con HTML, CSS y JavaScript.</p>
                    <p>Tambien tengo mi propio sitio web elaborado con React.</p>
                    <p>Algunos proyectos y trabajos personales en GitHub, los cuales realizaba para practicar estas tecnologías antes mencionadas.</p>
                </div>
            </div>

            <div class="dato">
                <h4>Deportes: </h4>
                <div class="datos-info">
                    <p>Me gusta jugar el futbol</p>
                    <p>Forme parte de un grupo de danza folklórica con el cual tuve la oportunidad de viajar a Colombia en el año 2017 y a Perú en el año 2018.</p>
                </div>
                    
            </div>

            <div class="dato">
                <h4>Cursos: </h4>
                <div class="datos-info">
                    <p>Algunos cursos en una plataforma llamada Platzi y videos de YouTube. </p>
                </div>
            </div>
            <div class="dato">
                <h4>Contacto: </h4>
                <div class="options">
                
                    <div>
                        <a href="https://cristiancr20.github.io/Portfolio/">
                            <i class='bx bx-expand-alt'></i>
                        </a>
                        
                    </div>
                    <div>
                        <a href="#">
                            <i class='bx bxl-instagram'></i>
                        </a>
                    </div>
                    <div>
                        <a href="https://github.com/cristiancr20">
                            <i class='bx bxl-github'></i>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <i class='bx bxl-tiktok' ></i>
                        </a>
                    </div>

                    <div>
                        <a href="https://codepen.io/cristian-capa">
                            <i class='bx bxl-codepen' ></i>
                        </a>
                    </div>

                    <div>
                        <a href="#">
                        <i class='bx bxl-youtube' ></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="calcular">
            <h1>Calcular Etiquetas</h1>
            <div class="info">
                <p>Existen: </p>
                <div id="resultadoDiv"></div>
                <p>etiquetas div</p>
            </div>
            <div class="info">
                <p>Existen: </p>
                <div id="resultadoH1"></div>
                <p>etiquetas H1</p>
            </div>
            <div class="info">
                <p>Existen: </p>
                <div id="resultadoH2"></div>
                <p>etiquetas H2</p>
            </div>
            <div class="info">
                <p>Existen: </p>
                <div id="resultadoH4"></div>
                <p>etiquetas H4</p>
            </div>

            <div class="info">
                <p>Existen: </p>
                <div id="resultadoUl"></div>
                <p>etiquetas ul</p>
            </div>

            <div class="info">
                <p>Existen: </p>
                <div id="resultadoLi"></div>
                <p>etiquetas li</p>
            </div>

            <div class="info">
                <p>Existen: </p>
                <div id="resultadoA"></div>
                <p>etiquetas a</p>
            </div>

            <div class="info">
                <p>Existen: </p>
                <div id="resultadoP"></div>
                <p>etiquetas p</p>
            </div>

            <div class="info">
                <p>Existen: </p>
                <div id="resultadoI"></div>
                <p>etiquetas i</p>
            </div>
        </div>
    </div>

    <script>
        /* Divs */
            var divs = document.getElementsByTagName('div').length;
            document.getElementById("resultadoDiv").innerHTML=divs;

            /* H1 */
            var h1s = document.getElementsByTagName('h1').length;
            document.getElementById("resultadoH1").innerHTML=h1s;

            /* H2 */
            var h2s = document.getElementsByTagName('h2').length;
            document.getElementById("resultadoH2").innerHTML=h2s;

            /* H4 */
            var h4s = document.getElementsByTagName('h4').length;
            document.getElementById("resultadoH4").innerHTML=h4s;

            /* Ul */
            var uls = document.getElementsByTagName('ul').length;
            document.getElementById("resultadoUl").innerHTML=uls;

            /* Li */
            var lis = document.getElementsByTagName('li').length;
            document.getElementById("resultadoLi").innerHTML=lis;

            /* a */
            var as = document.getElementsByTagName('a').length;
            document.getElementById("resultadoA").innerHTML=as;

            /* p */
            var ps = document.getElementsByTagName('p').length;
            document.getElementById("resultadoP").innerHTML=ps;

             /* i */
             var is = document.getElementsByTagName('i').length;
            document.getElementById("resultadoI").innerHTML=is;

    </script>
</body>
</html>

