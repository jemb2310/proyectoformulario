<!DOCTYPE html>
<!--

Ejemplo de un formulario un poquito mas completo
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo de formulario de alta</title>
    </head>
    <body>
        <form action="datos.php" method="POST">
            Nombre: <input type="text" name="nombre"><br>
            Edad: <input type="number" name="edad"><br>
            Ciudad: <select name="ciudad"><br>
                <option>Barcelona</option>
                <option>Girona</option>
                <option>Lleida</option>
                <option>Tarragona</option>
            </select><br>
            
            Sexo: 
            Hombre <input type="radio" name="sexo" value="hombre">
            Mujer <input type="radio" name="sexo" value="mujer"><br>
            <input type="submit" name="enviar" value="Enviasr Datos"><br>
                  
        </form>
    </body>
</html>
