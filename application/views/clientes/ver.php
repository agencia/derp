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
	<a href="<?php echo base_url() ?>index.php/clientes" data-icon="delete">atras</a>
		<h1>Cliente-<?php echo "Detalle del cliente"; ?></h1>
	<a href="<?php echo base_url() ?>index.php/clientes/opt/<?php echo $idcliente ?>" data-icon="gear">Opciones</a>
	</div><!-- /header -->

        <div data-role="content">
            <div>
                    <table>
                        <tr>
                            <td colspan="2"><strong><h4> <img src="<?php echo base_url() ?>img/status<?php echo $razon ?>.png" class="ui-li-icon" /></h4></strong></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Razon</strong></td>
                            <td><em><?php echo $razon; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Telefono</strong></td>
                            <td><em><?php echo $telefono; ?></em></td>
                        </tr>
                    </table>
            </div>
            <br />
            <div id="bitacora">
                <ul data-role="listview" data-theme="c">
                    <li data-role="header">Bitacora</li>
                </ul>
            <br />
                <div>
                    <a href="<?php echo base_url(); ?>index.php/bitacoras/nuevo/os/<?php echo $idcliente ?>"  data-rel="dialog" data-transition="slidedown" data-role="button" >Actualizar Bitacora</a>
                </div>
            </div>
        </div><!-- /content -->
<div data-role="footer">
		<h1>DERP - Designa</h1>
	</div>
</div><!-- /page -->

</body>
</html>