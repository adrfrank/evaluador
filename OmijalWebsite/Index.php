<?php
    require_once 'Model/SessionManager.php' ;
    
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Omijal</title>
        <link href="Resources/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="Styles/main.css" media="all" type="text/css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <script src="Scripts/jquery-1.8.0.min.js" type="text/javascript"></script>

    </head>
    <body>
        <header id="main-header">
            <section>
            </section>
            <section>
                <div class="float-right">
                    <?php if( SessionManager::getUser() == NULL) {?>
                    <a href="login.php">Iniciar sesión</a>
                    <?php } else {echo "Bienvenido <a href=\"Account\">" . SessionManager::getUser()->Nombre . "</a>" ?>
                        [<a href="Account/logout.php">Cerror Sesión</a>]
                    <?php }?>
                </div>
                <div class="main-wraper">
                    <a href="/"><img src="Resources/Images/OmijalMini.png" alt="Logo de omijal" class="float-left"></a>
                    <h3>Olimpiada de Informática del Estado de Jalisco</h3>
                    <div class="clearfix"></div>
                </div>
            </section>
        </header>
        <menu class="main-wraper">
            <ul id="main-menu">
                <li><a href="#TeoriaLogica">Lógica</a></li>
                <li><a href="#TeoriaC">C</a></li>
                <li><a href="#TeoriaKarel">Karel</a></li>
                <li><a href="#Problemario">Problemario</a></li>
            </ul>
        </menu>
        <section id="main-container">
            <section id="slider">
            </section>
            <section id="sub-container">
                <section id="content" class="main-wraper">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat dolor augue, condimentum ultrices leo imperdiet vel. Etiam euismod scelerisque quam eu elementum. Pellentesque quis hendrerit sem, a dapibus ligula. Nam scelerisque eget nulla id viverra. Aenean in sodales velit, nec rhoncus eros. Nam non lacinia eros, eget placerat urna. Mauris in posuere felis, ut vestibulum quam. Donec lacus libero, scelerisque id tortor ac, lacinia porta metus.</p>
                    <p>Etiam dui metus, consectetur id ligula eu, consequat faucibus ante. Aenean sit amet massa aliquet augue mattis tristique eget a odio. Aliquam erat volutpat. Nam ullamcorper lorem nunc, nec lobortis eros suscipit ac. Ut lobortis tempus auctor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi eu mauris id leo tempus bibendum ut ut dolor. Sed at semper nulla. Nullam hendrerit est non tellus pellentesque, nec aliquet lectus ornare. In eu vestibulum quam. Curabitur dignissim leo id tortor vulputate, eu luctus sem venenatis. Nam vitae aliquam est. Proin vitae ultrices mi. Morbi non nulla in sem commodo lobortis.</p>
                    <p>Aenean sed tempor libero. Etiam egestas gravida lorem. Aliquam erat volutpat. Phasellus pharetra bibendum tellus, ut volutpat risus condimentum elementum. Aliquam posuere diam ac euismod aliquet. Suspendisse in ipsum convallis, rutrum nisi ac, hendrerit nisl. Donec ut diam in sapien sagittis imperdiet quis non lectus. Sed mauris ligula, egestas eu ligula in, iaculis pellentesque dui. Ut condimentum laoreet hendrerit. Mauris tempor, diam sit amet posuere facilisis, eros ligula dapibus enim, ut vestibulum turpis odio facilisis lorem. Ut mi ipsum, auctor vel ornare ac, volutpat vel quam. Donec tincidunt mattis neque, bibendum suscipit quam vehicula ac.</p>
                </section>
            </section>

        </section>
        <section id="ribbon">
            <section class="main-wraper">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat dolor augue, condimentum ultrices leo imperdiet vel. Etiam euismod scelerisque quam eu elementum. Pellentesque quis hendrerit sem, a dapibus ligula. Nam scelerisque eget nulla id viverra. Aenean in sodales velit, nec rhoncus eros. Nam non lacinia eros, eget placerat urna. Mauris in posuere felis, ut vestibulum quam. Donec lacus libero, scelerisque id tortor ac, lacinia porta metus.</p>
            </section>
        </section>
        <footer>
            <?php var_dump($_SERVER["REQUEST_URI"]) ?>
        </footer>
        <!--scripts-->
        <script src="/Scripts/main.js" type="text/javascript"></script>
    </body>
</html>
