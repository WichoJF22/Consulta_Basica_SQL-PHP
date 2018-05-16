<html>
    <head> <title>Selección de registros</title></head>
<body>
<h1><center><n>Alumnos inscritos en los cursos de informática</n></center></h1>
    <h3>TABLA CON ALUMNOS</h3>
	<?php
        $conexion=mysqli_connect("localhost","root","","cursos") or  die("Problemas en la conexion");
    
    if(!$conexion){
        echo "NO jalo";
    }else{
        echo "si jalo";
    
    $consulta = "SELECT * FROM cursosal";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table border='2'>";
	echo "<tr>";
	echo "<th>Nombre</th>";
	echo "<th>Mail</th>";
	echo "<th>Codigo</th>";
	echo "</tr>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['Nombre'] . "</td><td>" . $columna['Main'] . "</td><td>". $columna['Cod_Curso'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>"; // Fin de la tabla
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
    }
	?>
    <H3>LISTA CON ALUMNOS</H3>
    
    
    
    
    
    
    <?php
        $conexion=mysqli_connect("localhost","root","","cursos") or  die("Problemas en la conexion");
    if(!$conexion){
        
    }else{
    $consulta = "SELECT * FROM cursosal";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

        while ($reg=mysqli_fetch_array($resultado))
        {	
        echo "Nombre:".$reg['Nombre']."<br>";
        echo "Mail:".$reg['Main']."<br>";
        echo "Curso:";
        switch ($reg['Cod_Curso']) {
            case 1:echo "PHP";
                 break;
            case 2:echo "ASP";
                   break;
            case 3:echo "JSP";
                   break;
         }
         echo "<br>";
         echo "<hr>";
        }
        mysqli_close($conexion);
        
    }
    
        
	?>

    </body>
</html> 