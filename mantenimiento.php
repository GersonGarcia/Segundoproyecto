
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">           
    <title>Proyecto 3</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">    
    <script src="js/ie-emulation-modes-warning.js"></script>
    </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Inicio</a>
          <a class="navbar-brand" href="registro.php">Nuevo Registro</a>
          <a class="navbar-brand" href="consultas.php">Consultas</a>
          <a class="navbar-brand" href="mantenimiento.php">Mantenimiento</a>
          <a class="navbar-brand" href="integrantes.php">Integrantes</a>
        </div>       
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    
      <div class="container">
        <div class="jumbotron">
          <center>
          <h1 class="page-header">Mantenimiento Cliente</h1><br>  
          </center>
        </div>
        <div class="container">
          <form method="POST" action="mantenimiento.php">
            <div class="form-group">              
                <label>Nit Cliente: </label>
                <input type="text" name="nit" class="form-control">
                <button type="submit" class="submit btn-primary" name="buscar">Buscar</button>
            </div>            
          </form>
        </div>   
        <?php
          if(isset($_POST['buscar'])){
            $nit=$_POST['nit'];
            include('conectar.php');
            $cn=mysqli_connect($host,$user,$pw) or die("Error en la db");
            mysqli_select_db($cn,
            $db) or die("Error seleccionar la DB");
            $queryS="select * from cliente where nit='$nit'";
            $verificarUsuario=mysqli_query($cn,$queryS);
            if(mysqli_num_rows($verificarUsuario)==0){            
                echo "<script>
                          alert('Cliente No encontrado');
                          history.back();
                     </script>";
            }else{
              while($fila=mysqli_fetch_assoc($verificarUsuario)){
                echo "<form class='control' action='procesar.php' enctype='multipart/form-data' method='POST'>";
                echo "<table class='table table-striped table-inverse'>";
                echo "<tbody>";
                echo "<tr>";
                echo "<td style='text-align: center; vertical-align:middle'>Nit</td>";
                echo "<td><input type='text' name='nit' value='".$fila['nit']."' class='form-control' readonly='readonly'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td style='text-align: center; vertical-align:middle'>Nombre</td>";
                echo "<td><input type='text' name='nombre' value='".$fila['nombre']."' class='form-control'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td style='text-align: center; vertical-align:middle'>Apellido</td>";
                echo "<td><input type='text' name='apellido' value='".$fila['apellido']."' class='form-control'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td style='text-align: center; vertical-align:middle'>Telefono</td>";
                echo "<td><input type='text' name='telefono' value='".$fila['telefono']."' class='form-control'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td style='text-align: center; vertical-align:middle'>Ocupación</td>";
                $ocupacionVa=["Ing-Sistemas","Medico","Abogado"];
                $ocupacion=["Ingeniero en Sistemas","Medico","Abogado"];
                echo "<td><select class='form-control' name='ocupacion'>";
                for($x=0; $x<count($ocupacionVa); $x++){
                  if($ocupacionVa[$x]==$fila['ocupacion']){

                    echo "<option value='".$ocupacionVa[$x]."' selected>".$ocupacion[$x]."</option>";
                  }else{
                    echo "<option value='".$ocupacionVa[$x]."'>".$ocupacion[$x]."</option>";
                  }                              
                }  
                echo "</td>";              
                echo "</tr>";
                echo "<tr>";
                echo "<td style='text-align: center; vertical-align:middle'>Foto</td>";
                echo "<td><center>";
                if($fila['foto']==""){
                  echo "<img src='Fotos/sinFoto.png' width='150'>";  
                }else {
                  echo "<img src='./Fotos/".$fila['foto']."' width='150'>";                  
                }                
                echo "<input type='file' name='foto' class='form-control'></center></td>";              
                echo "</tr>";                
                echo "</tbody>";
                echo "</table>";                   
                echo "<div class='container'>";
                echo "<center>";
                echo "<button type='submit' class='btn btn-primary' name='editar' value='editar'>Editar</button>";
                echo "<button type='submit' class='btn btn-info' name='eliminar' value='eliminar'>Eliminar</button>";
                echo "</center>
                      </div>";
                echo "</form>";
              }                              
            }
          }
        ?>   
        
        
      </div>
    

    <div class="container">     
      <hr>
      <footer>
        <center>
        	<p>&copy; 2017 Desarrollo Web</p>
        </center>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
