<!DOCTYPE html> 
<html> 
	<head> 
	<title>Clientes</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="<?php echo base_url() ?>css/themes/own.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile.structure-1.1.0.min.css" /> 

	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Clientes</h1>
	</div><!-- /header -->

        <div data-role="content">
            <div data-role="controlgroup" data-type="horizontal">
                <a href="<?php echo base_url() ?>index.php" data-role="button">Inicio</a>
                <a href="index.html" data-role="button">Nuevo</a>
            </div>
            <div>
                <ul data-role="listview" data-theme="g">
                    <?php foreach($clientes as $c): ?>
                        <li><a href="<?php echo base_url() ?>index.php/clientes/cliente/<?php echo $c["idcliente"] ?>"><?php echo $c["razon"] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div><!-- /content -->
<div data-role="footer">
		<h1>DERP - Designa</h1>
	</div>
</div><!-- /page -->

</body>
</html>