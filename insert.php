<?php
		include("conectar.php");				
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
			$queryS="select nit from cliente where nit='$nit'";
			$verificarUsuario=mysqli_query($cn,$queryS);
			if(mysqli_num_rows($verificarUsuario)>0){
				echo "<script>
						alert('El nit ya fue ingresado');
						history.back();
					 </script>";
			}else{
				$query="insert into cliente (nit,nombre,apellido,telefono,ocupacion,foto) values ('$nit','$nombre','$apellido','$telefono','$ocupacion','$foto')";						
					mysqli_query($cn,$query);				
					move_uploaded_file($_FILES["foto"]["tmp_name"], $ubicacion.basename($_FILES["foto"]["name"]));			
					echo "<script>
						alert('Datos Guardados');
						location='registro.php';
					 </script>";
					 mysqli_close($cn);				
			}
		}				
?>