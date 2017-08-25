
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
        <h1 class="page-header">Formulario de Registro</h1>
        <!--<form method="get" action="procesar.php">-->
        <form method="POST" action="insert.php" enctype="multipart/form-data">
            <div class ="form-group">
                <label>Nit</label>
                <input type="text" name="nit" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input type="text" name="apellido" class="form-control">
            </div>
            <div class="form-group">
                <label>telefono</label>
                <input type="text" name="telefono" class="form-control">
            </div>
            <div class="form-group">
                <label>Ocupación</label>
                <select class="form-control" name="ocupacion">
                    <option value="Ing-Sistemas">Ingeniero en Sistemas</option>                    
                    <option values="Medico">Medico</option>
                    <option values="Abogado">Abogado</option>
                </select>
            </div>      
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto">
            </div>                              
            <div class="form-group">
              <center>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-info">Limpiar</button>
              </center>
                

            </div>
        </form>
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
S