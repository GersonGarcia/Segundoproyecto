<?php
    $idCliente = $_POST['idcliente'];
    $nitCliente = $_POST['nitcliente'];
    $nombreCliente = $_POST['nombrecliente'];
    $apellidoCliente = $_POST['apellidocliente'];
    $telefonoCliente = $_POST['telefono'];

    $camposLlenos = strlen($idCliente) * strlen($nitCliente) * strlen($nombreCliente) * strlen($nombreCliente) * strlen($apellidoCliente) * strlen($telefonoCliente);
    if($camposLlenos >=1){
    	require("conect_db.php");
    	mysql_query("CALL sp_editarPC_Cliente($idCliente,'$nitCliente','$nombreCliente','$apellidoCliente',$telefonoCliente);");
    	mysql_close();
    	echo 'Cliente Actualizado exitosamente!';
    }else{
    	echo 'Debe llenar todos los campos';
    }
?>