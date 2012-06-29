<!DOCTYPE html> 
<html> 
	<head> 
	<title>Ordenes de Servicio</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="<?php echo base_url() ?>css/themes/own.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile.structure-1.1.0.min.css" /> 

	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
	<a href="<?php echo base_url() ?>" data-icon="home">Inicio</a>
		<h1>Ordenes de Servicio</h1>
	<a href="<?php echo base_url() ?>index.php/proyectos/lista_opt" data-icon="gear" data-theme="b">Opciones</a>
	</div><!-- /header -->

        <div data-role="content">
<!--            <div data-role="controlgroup" data-type="horizontal">
                <a href="<?php echo base_url() ?>index.php" data-role="button">Todos</a>
                <a href="<?php echo base_url() ?>index.php" data-role="button">Nuevos</a>
                <a href="<?php echo base_url() ?>index.php" data-role="button">Activos</a>
                <a href="index.html" data-role="button">Terminados</a>
            </div>-->
            <div>
                <ul data-role="listview" data-theme="g">
                    <?php if($proyectos) { ?>
                    <?php foreach($proyectos as $c): ?>
                        <li><a href="<?php echo base_url() ?>index.php/proyectos/ver/<?php echo $c["idproyecto"] ?>">
                        <?php echo $c["razon"] ?> - <?php echo $c["proyecto"] ?>
                            </a></li>
                    <?php endforeach; ?>
                    <?php  } else { ?>
                       <li><em>No hay registros</em></li>
                    <?php } ?>
                </ul>
            </div>
        </div><!-- /content -->
<div data-role="footer">
		<h1>DERP - Designa</h1>
	</div>
</div><!-- /page -->

</body>
</html>