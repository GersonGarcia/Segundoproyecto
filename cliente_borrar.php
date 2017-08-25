<?php
include(Conexion.php);
$nit=$_POST['nit_cliente'];
$nombre=$_POST['nom_cliente'];
$apellido=$_POST['apellido_cliente'];
$telefono=$_POST['telefono'];

$query="INSERT INTO cliente(nit_cliente,nom_cliente,apellido_cliente,telefono)" VALUES ('$nit','$nombre','$apellido','$telefono');
$resultado= $Conexion ->query($query);

if($resultado){

	echo "correxcto";

}else {
	echo "no se inserto";
}
?>

