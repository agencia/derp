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
	<a href="<?php echo base_url() ?>index.php/oservicio/lista_opt" data-icon="gear" data-theme="b">Opciones</a>
	</div><!-- /header -->

        <div data-role="content">
<!--            <div data-role="controlgroup" data-type="horizontal">
                <a href="<?php echo base_url() ?>index.php" data-role="button">Todos</a>
                <a href="<?php echo base_url() ?>index.php" data-role="button">Nuevos</a>
                <a href="<?php echo base_url() ?>index.php" data-role="button">Activos</a>
                <a href="index.html" data-role="button">Terminados</a>
            </div>-->
            <div>
                <?php if(isset($filtro_status)) { ?>
                <div data-role="controlgroup" data-type="horizontal">
                    <div data-role="button" class="ui-btn-active" data-inline="true">Filtro</div>
                    <div data-role="button" data-inline="true"><?php echo $filtro_status["nombre"]; ?></div>
                </div>
                <?php } ?>
                <ul data-role="listview" data-theme="g">
                    <?php if($oservicios) { ?>
                    <?php foreach($oservicios as $c): ?>
                        <li><a href="<?php echo base_url() ?>index.php/oservicio/ver/<?php echo $c["idos"] ?>">
                                <img src="<?php echo base_url() ?>img/status<?php echo $c["status"] ?>.png" class="ui-li-icon" />
                                <?php if($c["tiempo_activo"] != null) { ?>
                                <img src="<?php echo base_url() ?>img/clock_12x12.png" />
                                <?php } ?>
                        <?php echo $c["titulo"] ?>
                                <span class="ui-li-count"><?php echo $c["tiempo_real"] ?>/<?php echo $c["tiempo_estimado"] ?>hrs</span>
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