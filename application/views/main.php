<!DOCTYPE html>
<html>
    <!-- This file contains the main structure of the site such as menu and footer, inside the <body> tag we load the rest of views -->
    <head>
        <title><?php echo $Title; ?></title>
    </head>
    <body>
        Hola, este es el <?php echo $Title; ?> <br/>
        La url es: <?php echo $Url; ?>
        <p>
            Se supone que dentro de la etiqueta body insertaré un método para cargar vistas.
        </p>
    </body>
    <footer>
    
    </footer>
</html>