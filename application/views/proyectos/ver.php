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
	<a href="<?php echo base_url() ?>index.php/proyectos" data-icon="delete">atras</a>
		<h1><?php echo $proyecto; ?></h1>
	<a href="<?php echo base_url() ?>index.php/proyectos/opt/<?php echo $idproyecto ?>" data-icon="gear">Opciones</a>
	</div><!-- /header -->

        <div data-role="content">
            <div>
                    <table>
                        <tr>
                            <td colspan="2"><strong><h4>
                            <?php echo $proyecto; ?></h4></strong></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Cliente</strong></td>
                            <td><em><?php echo $razon; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Fecha Registro:</strong></td>
                            <td><em><?php echo $fecha_crea; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Status:</strong></td>
                            <td><em><?php echo $status; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Requerimientos:</strong></td>
                            <td><a href="<?php echo base_url(); ?>index.php/modulos"  data-mini="true" data-role="button" data-icon="plus">Ver</a></td>
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