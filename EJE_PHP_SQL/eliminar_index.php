   <?php
        $ID=$_REQUEST['id'];

    $conexion=mysqli_connect("localhost","root","","cursos") 
          or die("Problemas en la conexion");

        if(!$conexion){
            echo "<h3>valio verga</h3><hr><br>";
        }else {
            
            echo "<h3>Conexion exitosa</h3><hr><br>";

            $query="DELETE FROM cursosal where Nombre= 
           '$ID'" or die("Problemas en el delete".mysql_error($conexion));
            
            $resultado=$conexion->query($query);
            mysqli_close($conexion);
            
        }
            header("location: index.php");
        ?>