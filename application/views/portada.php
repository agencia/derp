<!DOCTYPE html> 
<html> 
	<head> 
	<title>Portada</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="<?php echo base_url() ?>css/themes/own.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile.structure-1.1.0.min.css" /> 

	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Inicio</h1>
	</div><!-- /header -->

	<div data-role="content">
            <ul data-role="listview" data-theme="g">
	<li><a href="<?php echo base_url(); ?>index.php/clientes">Clientes</a></li>
	<li><a href="<?php echo base_url(); ?>index.php/oservicio">Ordenes de Servicio</a></li>
	<li><a href="<?php echo base_url(); ?>index.php/reportes">Reportes</a></li>
	<li><a href="<?php echo base_url(); ?>index.php/usuarios">Usuarios</a></li>
</ul>
            </div><!-- /content -->

</div><!-- /page -->

</body>
</html>