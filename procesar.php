<?php
	include("conectar.php");
		//error_reporting(0);				
		$nit=$_POST['nit'];
		$nombre =$_POST['nombre'];
		$apellido = $_POST['apellido'];
		$telefono=$_POST['telefono'];
		$ocupacion=$_POST['ocupacion'];
		$foto = $_FILES['foto']['name'];
		$ubicacion="./Fotos/";
		$error="";
		if(empty($nit)){
			$error = "No ingreso nit ";			
		}
		if(empty($nombre)){
			$error = $error."No ingreso Nombre \n";						
		}
		if(empty($apellido)){
			$error =$error. "No ingreso Apellido";			
		}
		if(empty($telefono)){
			$error = $error."No ingreso Telefono";			
		}		
		if(strlen($error)>0){			
			echo "<script>
					alert('Campos Vacios');
					history.back();
				 </script>";	
			exit;			
		}else{
			$cn=mysqli_connect($host,$user,$pw) or die ("Error de conectar");
			mysqli_select_db($cn,$db) or die ("Error en DB");
			$query="";
			$editarEliminar=$_POST['eliminar'];
			if($editarEliminar=="eliminar"){
				$query="delete from cliente where nit ='$nit'";
			}else {
				if(empty($foto)){
					$query="update cliente set nombre='$nombre',apellido='$apellido',telefono='$telefono',ocupacion='$ocupacion' where nit='$nit'";
				}else{
					$query="update cliente set nombre='$nombre',apellido='$apellido',telefono='$telefono',ocupacion='$ocupacion', foto='$foto' where nit='$nit'";
					move_uploaded_file($_FILES["foto"]["tmp_name"], $ubicacion.basename($_FILES["foto"]["name"]));		
				}
			}
			mysqli_query($cn,$query) or die ("en la consulta");							
			echo "<script>
					alert('Cambios Guardados');
					location='mantenimiento.php';
				 </script>";
			mysqli_close($cn);							
		}
?>