<?php
    require_once '../Model/SessionManager.php';
    require_once '../Model/Escuelas.php';
    $Escuelas = EscuelasManager::getAll();
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Omijal - Registro</title>
        <link href="../Resources/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="../Styles/main.css" media="all" type="text/css" rel="stylesheet" />
        <script src="../Scripts/jquery-1.8.0.min.js" type="text/javascript"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <script src="../Resources/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <header id="main-header">
            <section></section>
            <section>
                <div class="float-right">
                    <?php if( SessionManager::getUser() == NULL) {?>
                    <a href="../login.php">Iniciar sesión</a>
                    <?php } else {echo "Bienvenido <a href=\"../Account\">" . SessionManager::getUser()->Nombre . "</a>" ?>
                        [<a href="logout.php">Cerror Sesión</a>]
                    <?php }?>
                </div>

                <div class="main-wraper">
                    <img src="../Resources/Images/OmijalMini.png" alt="Logo de omijal" class="float-left">
                    <h3>Olimpiada de Informática del Estado de Jalisco</h3>
                    <div class="clearfix"></div>
                </div>
            </section>
        </header>
        <menu class="main-wraper">
            <ul id="main-menu">
                <li><a href="../index.php#TeoriaLogica">Lógica</a></li>
                <li><a href="../index.php#TeoriaC">C</a></li>
                <li><a href="../index.php#TeoriaKarel">Karel</a></li>
                <li><a href="../index.php#Problemario">Problemario</a></li>

            </ul>
        </menu>
        <section id="main-container">
            <section id="slider">
            </section>
            <section id="sub-container">
                <section id="content" class="main-wraper">
                    <form>
                        <fieldset>
                            <legend>Datos de usuario</legend>
                            <label for="txtUsername">Nombre de usuario:</label>
                            <input type="text" required name="txtUsername" />
                            <label for="txtPass">Contraseña: </label>
                            <input type="password" required id="txtPass" name="txtPassword" />
                            <label for="txtConfirm">Confirma tu contraseña: </label>
                            <input type="password" required id="txtConfirm" name="txtConfirm" />
                             <label for="txtEmail">Correo electrónico:</label>
                            <input type="text" required name="txtEmail" />
                        </fieldset>
                        <fieldset>
                            <legend>Información del participante</legend>
                            <label for="txtNombre">Nombre(s):</label>
                            <input type="text" required name="txtNombre" />
                            <label for="txtApellidoP">Apellido Paterno:</label>
                            <input type="text" required name="txtApellidoP" />
                            <label for="txtApellidoM">Apellido Materno:</label>
                            <input type="text" required name="txtApellidoM" />
                        </fieldset>
                        <fieldset>
                            <legend>Escuela</legend>
                            <label for="lstEscuela">Nombre: </label>
                            <select name="lstEscuela" id="lstEscuela">
                                <?php 
                                    foreach($Escuelas as $esc){
                                        echo "<option val='$esc->IdEscuela'>$esc->Nombre</option>";
                                    } 
                                ?>
                            </select>
                        </fieldset>
                        <input type="submit" value="Enviar" />
                    </form>
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
