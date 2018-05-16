<html>
<head>Operaciones en SQL</head>
    <body>
    <h1>Links para las operaciones</h1>
        
        <a href="http://localhost/EJE_PHP_SQL/insertar.php">Insertar</a><br>
        <a href="http://localhost/EJE_PHP_SQL/Modificar.php">Modificar</a><br>
        <a href="http://localhost/EJE_PHP_SQL/Borrar.php">Eliminar</a><br>
        <a href="http://localhost/EJE_PHP_SQL/consulta.php">Consultas</a><br>
        <a href="http://localhost/EJE_PHP_SQL/VIDEO.php">lo del vidio</a><br>
        
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
	echo "<th>Modificar</th>";
	echo "<th>Eliminar</th>";
	echo "</tr>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['Nombre'] . "</td><td>" 
            . $columna['Main'] . "</td><td>"
            . $columna['Cod_Curso'] 
            . "</td><td><a href='http://localhost/EJE_PHP_SQL/modificar_index.php?id=$columna[Nombre]'>Modificar</a></td>"."<td><a href='http://localhost/EJE_PHP_SQL/eliminar_index.php?id=$columna[Nombre]'>Eliminar</a></td>";
		echo "</tr>";
	}
	
	echo "</table>"; // Fin de la tabla
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
    }
	?>
    </body>
</html>