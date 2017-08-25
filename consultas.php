
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
    <div class="jumbotron">
      <div class="container">
        <center>
	        <h1>Consulta General </h1><br>
	        <div class="panel-body">
              <table class="table table-striped table-inverse">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nit</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Ocupación</th>
                    <th>Foto</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include("conectar.php");
                    $query="select * from cliente";
                    $cn=mysqli_connect($host,$user,$pw) or die ("Error Conectar servidor");                    
                    mysqli_select_db($cn,$db) or die ("Error en DB");
                    $result=mysqli_query($cn,$query);
                    if($result){
                      $c=1;
                      while($fila=mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td style='vertical-align:middle'>$c</td>";  
                        echo "<td style='vertical-align:middle'>".$fila['nit']."</td>";  
                        echo "<td style='vertical-align:middle'>".$fila['nombre']." ".$fila['apellido']."</td>";  
                        echo "<td style='vertical-align:middle'>".$fila['telefono']."</td>";  
                        echo "<td style='vertical-align:middle'>".$fila['ocupacion']."</td>"; 
                        if($fila['foto']=="") {
                          echo "<td><img src='Fotos/sinFoto.png' width='100'></td>";  
                        }else{
                          echo "<td><img src='Fotos/".$fila['foto']."' width='100'></td>";  
                        }                        
                        echo "</tr>";  
                        $c++;
                      }
                    }
                  ?>
                </tbody>
              </table>                                   
          </div>
	    </center>
      </div>
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
