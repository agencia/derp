<!DOCTYPE html> 
<html> 
	<head> 
	<title>Usuarios</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="<?php echo base_url() ?>css/themes/own.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile.structure-1.1.0.min.css" /> 

	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
	<a href="<?php echo base_url() ?>index.php/usuarios" data-icon="delete">Cancelar</a>
		<h1>Usuarios</h1>
	</div><!-- /header -->

        <div data-role="content">
            <form method="post" action="../../index.php/usuarios/setnuevo" data-ajax="false" >
                <label for="txtnombre">Nombre</label>
                <input type="text" name="Nombre" id="txtnombre" />
                <label for="txtapellidop">Apellido Paterno</label>
                <input type="text" name="Apellido_P" id="txtapellidop" />
                <label for="txtnombre">Apellido Materno</label>
                <input type="text" name="Apellido_M" id="txtapellidom" />
                <label for="txtapellidop">Usuario</label>
                <input type="text" name="Usuario" id="txtusuario" />
                <label for="txtnombre">Contrasena</label>
                <input type="password" name="Contrasena" id="txtcontrasena" />
                <label for="txtapellidop">Correo</label>
                <input type="text" name="correo" id="txtcorreo" />
                <input type="submit" data-icon="check" value="Registrar" />
            </form>
        </div><!-- /content -->
<div data-role="footer">
		<h1>DERP - Designa</h1>
	</div>
</div><!-- /page -->

</body>
</html>