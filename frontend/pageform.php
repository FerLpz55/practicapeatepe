<html>
    <head>
        <title>datos desde el formulario</title>
    </head>
    <body>
        <?php
        echo "El nombre ingresado es: ";

        echo $_REQUEST['nombre'];

        echo "<br>";

        echo "El correo ingresado es: ";
        
        echo $_REQUEST['correo'];
        
        echo "<br>";
        
        echo "El telefono ingresado es: ";
        
        echo $_REQUEST['telefono'];
        
        ?>
    </body>
</html>
