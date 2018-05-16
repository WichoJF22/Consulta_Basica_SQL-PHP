<html>
    <head>
        <title>INSERTAR ALUMNOS</title>
    </head>
    <body>
        <h1>Alta de Alumnos</h1>
        <form action="insertar2.php" method="post">
            Ingrese nombre:
        <input type="text" name="Nombre"><br>
            Ingrese mail:
        <input type="text" name="Main"><br>
            Seleccione el curso:
        <select name="Cod_Curso">
            <option value="1">PHP</option>
            <option value="2">ASP</option>
            <option value="3">JSP</option>
        </select>
        <br>
            <input type="submit" value="Registrar">
        </form>
    </body>
</html>
