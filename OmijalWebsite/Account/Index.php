<?php
    require_once '../Model/SessionManager.php' ;  
    $user = SessionManager::getUser();
    if($user == NULL)  {
        header("location: ../");
    }
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Omijal</title>
        <link href="../Resources/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="../Styles/main.css" media="all" type="text/css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <script src="../Scripts/jquery-1.8.0.min.js" type="text/javascript"></script>

    </head>
    <body>
        <header id="main-header">
            <section>
            </section>
            <section>
                <div class="float-right">
                    <?php if( SessionManager::getUser() == NULL) {?>
                    <a href="login.php">Iniciar sesión</a>
                    <?php } else echo SessionManager::getUser()->Nombre ?>
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
                <li><a href="#info">Información</a></li>
                <li><a href="#Pass">Cambiar Password</a></li>
            </ul>
        </menu>
        <section id="main-container">
            <section id="slider">
            </section>
            <section id="sub-container">
                <section id="content" class="main-wraper">
                    <h2><?php echo $user->Nombre; ?></h2>
                    <p>Esta es tu información Personal.</p>
                    <p>Aquí se podrá modifcar la información personal del usuario</p>
                    <p> <?php echo RolesManager::IsInRole($user,RolesManager::$Admin) ? "Administrador" : "No" ?></p>
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
        <!--scripts-->
        <script src="/Scripts/main.js" type="text/javascript"></script>
    </body>
</html>
