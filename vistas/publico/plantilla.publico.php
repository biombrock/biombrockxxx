<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/76675d8dc9.js" crossorigin="anonymous"></script>
        <title>Biombrock</title>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li class="logo"><a href="index.php?ruta=inicio">Logo</a></li>
                    <li><a href="index.php?ruta=registro">Registro</a></li>
                    <li><a href="index.php?ruta=ingreso">Ingreso</a></li>
                </ul>
            </nav>
        </header>

        <section class="contenedor">

        <?php

            if(isset($_GET['ruta'])){

                if($_GET['ruta'] == "registro" ||
                    $_GET['ruta'] == "ingreso" ||
                    $_GET['ruta'] == "inicio"){ 

                    include $_GET['ruta'].".php";
                        
                }else{

                    include "404.php";

                }

            }else{

                include_once "inicio.php";

            }
                
        ?>

        </section>
    </body>
</html>