<?php
include(Conexion.php);

$id=$_REQUEST['id_cliente'];


$query="DELETE FROM cliente WHERE id='$id_cliente' ";
$resultado= $Conexion ->query($query);

if($resultado){
	header("Location:tabla.php")

}else {
	echo "no se inserto";
}
?>

