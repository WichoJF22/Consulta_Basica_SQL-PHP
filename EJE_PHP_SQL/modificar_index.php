<html>
    <head>
        <title>MODIFICAR DATOS DE ALUMNOS</title>
    </head>
    <body>
        
        <?php
        $ID=$_REQUEST['id'];
        echo $ID;
        ?>
        
        
        <h1>Datos a modificar de Alumnos</h1>
         <form action="modificar_index2.php" method="post">
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
        <input class="identificador" type="text" name="Identi" value="<?php echo $_REQUEST['id'] ?>"><br>
             
             <style>
                 .identificador{
                     height: 10px;
                     width: 100px;
                 }
             </style>
            <input type="submit" value="Actualizar">
        </form>
        
        
        
    </body>
</html>