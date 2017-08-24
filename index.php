<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Cliente</title>
    </head>
    <body>        
        <h1 style="color:blue" align="center">Actualizar Cliente</h1>
        <form action="registros.php" method="POST">
            <labe>ID Cliente a Modificar</labe>
            <input type="text" name="idcliente"/>
            <input type="submit" value="Actualizar"/>
            <br/>
        </form>
        <?php
            function mostrarDatos($resultado){                                                      
                    if ($resultado != NULL) {   
                        echo "<table style='border:3px solid #00FF00'>";
                        echo "<tr style='color:#0000D9'>";
                        echo "<td>ID Cliente: ".$resultado['idcliente']."</td>";
                        echo "</tr>";
                        echo "<tr style='color:#0000D9'>";
                        echo "<td>Nit Cliente: ".$resultado['nit']."</td>";
                        echo "</tr>";
                        echo "<tr style='color:#0000D9'>";
                        echo "<td>Nombre Cliente: ".$resultado['nombre']."</td>";
                        echo "</tr>";
                        echo "<tr style='color:#0000D9'>";
                        echo "<td>Apellido Cliente: ".$resultado['apellido']."</td>";
                        echo "</tr>";
                        echo "<tr style='color:#0000D9'>";
                        echo "<td>Telefono: ".$resultado['telefono']."</td>";
                        echo "</tr>";                        
                        echo "</table>";
                        echo "<br/>";                       
                    }
                }
                $link = mysqli_connect("localhost","root","contrasenia");
                mysqli_select_db($link,"ProyectoClienteDB");
                $resultado = mysqli_query($link,"SELECT * FROM cliente;");
                while($fila = mysqli_fetch_array($resultado)){
                    mostrarDatos($fila);                    
                } 
        ?>
    </body>
</html>