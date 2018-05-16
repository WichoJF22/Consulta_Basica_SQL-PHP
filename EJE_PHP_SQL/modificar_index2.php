<html>
<head><title>Actualizado</title></head>
    <body>
    <?php 
        $conexion=mysqli_connect("localhost","root","","cursos") or die("Problemas en la conexion");

        if(!$conexion){
            
            echo "<h3>valio verga</h3><hr><br>";

                }else {

                    echo "<h3>Conexion exitosa</h3><hr><br>";

                    $query="UPDATE cursosal set Nombre='$_REQUEST[Nombre]',Main='$_REQUEST[Main]', Cod_Curso='$_REQUEST[Cod_Curso]' where Nombre='$_REQUEST[Identi]'" or die("Problemas en el Update".mysql_error($conexion));



                    $resultado=$conexion->query($query);
                    mysqli_close($conexion);
                
                    header("location: index.php");
                }
        ?>
    </body>
</html>
