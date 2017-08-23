<html>
<link rel="stylesheet" href="estilophp.css">
<body  background="fondo.jpg">

<div id="navegador">

<?php

	include ("formulario-conexion.php");
	$server="localhost";
	$usuario="root";
	$contraseña=" ";
	$db="proyectoclientedb";
	
	$con=mysqli_connect($host,$usuario,$pw,$db)or die("problemas en la conexion");
	
	$consulta=mysqli_query($con,"SELECT * from cliente")or die ("error en los datos");
	
	echo "<h1>CONSULTA DE DATOS</h1>";
	
	echo '<table border ="5" align="center">';
	echo '<tr>';
	echo '<th id="idcliente"> <font color="red" size="4"> Idcliente </font> </th>';
	echo '<th id="nit"> <font color="red" size="4"> Nit </font></th>';
	echo '<th id="nombre"> <font color="red" size="4"> Nombre </font> </th>';
	echo '<th id="apellido"> <font color="red" size="4"> Apellido </font> </th>';
	echo '<th id="telefono"> <font color="red" size="4"> Telefono </font> </th>';
	
	while($fila=mysqli_fetch_array($consulta)){
		echo '<tr>';
		echo '<td> <font color="white">'.$fila['idcliente'].'</font> </td>';
		echo '<td> <font color="white">'.$fila['nit'].'</font> </td>';
		echo '<td> <font color="white">'.$fila['nombre'].'</font> </td>';
		echo '<td> <font color="white">'.$fila['apellido'].'</font> </td>';
		echo '<td> <font color="white">'.$fila['telefono'].'</font> </td>';
		echo '</tr>';
		
	}
	mysqli_close($con);
	echo '</table>';
?>
<br>
<br>
<center>
<li><a href="formulario-consulta.php"> <font size="4"> Volver </font> </a> </li>
</center>
 
</div>
</body>
</html>

