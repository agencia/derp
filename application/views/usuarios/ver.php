<!DOCTYPE html> 
<html> 
	<head> 
	<title>Detalle</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="<?php echo base_url() ?>css/themes/own.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile.structure-1.1.0.min.css" /> 

	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
	<a href="<?php echo base_url() ?>index.php/usuarios" data-icon="delete">atras</a>
	<a href="<?php echo base_url() ?>index.php/usuarios/opt/<?php echo $Id_usuario ?>" data-icon="gear">Opciones</a>
	</div><!-- /header -->

        <div data-role="content">
            <div>
                    <table>
                        <tr valign="top">
                            <td><strong>Nombre;n:</strong></td>
                            <td><em><?php echo $Nombre; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Apellido_P:</strong></td>
                            <td><em><?php echo $Apellido_P; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Apellido_M:</strong></td>
                            <td><em><?php echo $Apellido_M; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Usuario:</strong></td>
                            <td><em><?php echo $Usuario; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Correo:</strong></td>
                            <td><em><?php echo $correo; ?></em></td>
                        </tr>
                    </table>
            </div>
            <br />
        </div><!-- /content -->
<div data-role="footer">
		<h1>DERP - Designa</h1>
	</div>
</div><!-- /page -->

</body>
</html>