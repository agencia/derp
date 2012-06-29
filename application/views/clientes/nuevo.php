<!DOCTYPE html> 
<html> 
	<head> 
	<title>Nuevo cliente</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="<?php echo base_url() ?>css/themes/own.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile.structure-1.1.0.min.css" /> 

	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
	<a href="<?php echo base_url() ?>index.php/clientes" data-icon="delete">Cancelar</a>
		<h1>Nuevo cliente</h1>
	</div><!-- /header -->

        <div data-role="content">
            <form method="post" action="<?php echo base_url() ?>index.php/clientes/setnuevo" data-ajax="false" >
                <label for="txttitulo">Nombre del cliente</label>
                <input type="text" name="razon" id="razon" />
                <input type="submit" data-icon="check" value="Registrar" />
            </form>
        </div><!-- /content -->
<div data-role="footer">
		<h1>DERP - Designa</h1>
	</div>
</div><!-- /page -->

</body>
</html>