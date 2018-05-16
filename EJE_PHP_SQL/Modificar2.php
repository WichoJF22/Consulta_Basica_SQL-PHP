<html>
    <head>
    <title>Modificar de la Base de Datos</title>
    </head>
<body>
    <?php
    $conexion=mysqli_connect("localhost","root","","cursos") 
      or die("Problemas en la conexion");

    if(!$conexion){
        echo "<h3>valio verga</h3><hr><br>";
        
    }else {
        
        echo "<h3>Conexion exitosa</h3><hr><br>";

        $query="UPDATE cursosal set Nombre='$_REQUEST[Nombre_nuevo]' where Nombre='$_REQUEST[Nombre_viejo]'" or die("Problemas en el update".mysql_error($conexion));
        
        
        
        $resultado=$conexion->query($query);
        mysqli_close($conexion);
    }
        echo "Se actualizo el dato";


    ?>
</body>
</html>