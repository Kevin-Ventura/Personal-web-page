<!DOCTYPE html>
<html lang = "es">
    <!-- This file contains the main structure of the site such as menu and footer, inside the <body> tag we load the rest of views -->
    <head>
        <title><?php echo $Title; ?></title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "stylesheet" href = "<?php echo $Url; ?>assets/css/bootstrap.min.css">
        <link rel = "stylesheet" href = "<?php echo $Url; ?>assets/css/style.css">
        
    </head>
    <body>
        <div class = "container-fluid">
            <header>
                <nav>
                    <ul id = "MainMenu">
                        <li>Acerca</li>
                        <li>Conocimientos</li>
                        <li>Proyectos</li>
                        <li>Contactos</li>
                    </ul>
                </nav>
            </header>
            <div class = "row">
                <div class = "col-lg-3">
                    To prove if bootstrap is working :)
                </div>
                <div class = "col-lg-3">
                    Middle column
                </div>
                <div class = "col-lg-3">
                    Last column of this place
                </div>
            </div>
        
        
        
        
        
            <footer>
                <script src = "<?php echo $Url; ?>assets/js/jquery.js"></script>
                <script src = "<?php echo $Url; ?>assets/js/bootstrap.min.js"></script>
            </footer>
        </div>
    </body>
</html>