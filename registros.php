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
        <label>Llenar Formulario de Cliente:</label>
        <form action="actualizar.php" method="POST" name="frmAltaCliente">
            <?php
                echo '<input type="text" value='.$_POST['idcliente'].' name="idcliente" maxlength="14"/>';
            ?>            
            <br/>
            <input type="text" placeholder="NIT Cliente..." name="nitcliente" maxlength="55"/>
            <br/>
            <input type="text" placeholder="Nombre Cliente..." name="nombrecliente" maxlength="77"/>
            <br/>
            <input type="text" placeholder="Apellido Cliente..." name="apellidocliente" maxlength="77"/>
            <br/>
            <input type="text" placeholder="Telefono..." name="telefono" maxlength="8"/>
            <br/>
            <input type="submit" value="Guardar"/>
            <input type="reset"/>
            <br/>                        
        </form>
    </body>
</html>