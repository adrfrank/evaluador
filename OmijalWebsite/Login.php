<?php
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Omijal - Login</title>
        <link href="Resources/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="Styles/main.css" media="all" type="text/css" rel="stylesheet" />
        <script src="Scripts/jquery-1.8.0.min.js" type="text/javascript"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
        <header id="main-header">
            <section>
            </section>
            <section>

                <div class="main-wraper">
                    <img src="Resources/Images/OmijalMini.png" alt="Logo de omijal" class="float-left">
                    <h3>Olimpiada de Informática del Estado de Jalisco</h3>
                    <div class="clearfix" ></div>
                </div>

            </section>
        </header>
        <menu class="main-wraper">
            <ul id="main-menu">
                <li><a href="index.php#TeoriaLogica">Lógica</a></li>
                <li><a href="index.php#TeoriaC">C</a></li>
                <li><a href="index.php#TeoriaKarel">Karel</a></li>
                <li><a href="index.php#Problemario">Problemario</a></li>

            </ul>
        </menu>
        <section id="main-container">
            <section id="slider">
            </section>
            <section id="sub-container">

                <section id="content" class="main-wraper">
                    <div class="login-panel">
                        <form method="post">
                            <label for="txtUser">Usuario: </label>
                            <input type="text" required placeholder="Usuario" id="txtUser" name="txtUser">
                            <label for="txtPass">Contraseña: </label>
                            <input type="password" required placeholder="Contraseña" id="txtPass" name="txtPass">
                            <br />
                            <div class="text-right">
                                <a href="#">¿Olvidaste tu contraseña?</a><br />
                                <a href="#">Regístrate</a><br />
                                <input type="submit" value="Iniciar sesión" class="btn" />
                            </div>
                        </form>
                    </div>
                </section>
            </section>

        </section>
        <section id="ribbon">
            <section class="main-wraper">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat dolor augue, condimentum ultrices leo imperdiet vel. Etiam euismod scelerisque quam eu elementum. Pellentesque quis hendrerit sem, a dapibus ligula. Nam scelerisque eget nulla id viverra. Aenean in sodales velit, nec rhoncus eros. Nam non lacinia eros, eget placerat urna. Mauris in posuere felis, ut vestibulum quam. Donec lacus libero, scelerisque id tortor ac, lacinia porta metus.</p>
            </section>
        </section>
        <footer>

        </footer>

    </body>
</html>
