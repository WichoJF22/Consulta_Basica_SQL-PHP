<html>
<head>
<title>insertar base de datos</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","cursos") 
  or die("Problemas en la conexion");

if(!$conexion){
    echo "<h3>valio verga</h3><hr><br>";
}else {
    echo "<h3>Conexion exitosa</h3><hr><br>";
    
    $query="insert into cursosal(Nombre,Main,Cod_Curso) values 
   ('$_REQUEST[Nombre]','$_REQUEST[Main]',$_REQUEST[Cod_Curso])" or die("Problemas en el select".mysql_error($conexion));

    $resultado=$conexion->query($query);
    mysqli_close($conexion);
}

header("location: index.php");
    
    ?>
</body>
</html>
