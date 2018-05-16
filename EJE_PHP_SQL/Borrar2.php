<html>
    <head>
    <title>Borrar de la Base de Datos</title>
    </head>
<body>
    <?php
    $conexion=mysqli_connect("localhost","root","","cursos") 
      or die("Problemas en la conexion");

    if(!$conexion){
        echo "<h3>valio verga</h3><hr><br>";
    }else {
        echo "<h3>Conexion exitosa</h3><hr><br>";

        $query="DELETE FROM cursosal where Nombre= 
       '$_REQUEST[Nombre]'" or die("Problemas en el delete".mysql_error($conexion));
        
        
        
        $resultado=$conexion->query($query);
        mysqli_close($conexion);
    }
        echo "ya se chingo ese wey";


    ?>
</body>
</html>