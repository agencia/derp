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
	<a href="<?php echo base_url() ?>index.php/oservicio" data-icon="delete">atraz</a>
		<h1>OS</h1>
	<a href="<?php echo base_url() ?>index.php/oservicio/opt/<?php echo $idos ?>" data-icon="gear">Opciones</a>
	</div><!-- /header -->

        <div data-role="content">
            <div>
                    <table>
                        <tr>
                            <td colspan="2"><strong><h4> 
                            <img src="<?php echo base_url() ?>img/status<?php echo $status ?>.png" class="ui-li-icon" />
                            <?php if($tiempo_activo != null) { ?>
                                <img src="<?php echo base_url() ?>img/clock_12x12.png" />
                            <?php } ?>
                            <?php echo $titulo; ?></h4></strong></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Descripci&oacute;n:</strong></td>
                            <td><em><?php echo $descripcion; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Fecha Registro:</strong></td>
                            <td><em><?php echo $fecha_crea; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Estado:</strong></td>
                            <td><em><?php echo $estado; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Ultima modificacion:</strong></td>
                            <td><em><?php echo $fecha_mod; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Tiempo estimado:</strong></td>
                            <td><em><?php echo $tiempo_estimado; ?> hrs</em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Tiempo real:</strong></td>
                            <td>
                                <?php if($tiempo_activo != null) { ?>
                                    <img src="<?php echo base_url() ?>img/clock_12x12.png" />
                                <?php } ?>
                                <em><?php echo $tiempo_real; ?> hrs</em>
                            </td>
                        </tr>
                    </table>
            </div>
            <br />
            
            <div id="bitacora">
                <ul data-role="listview" data-theme="c">
                    <li data-role="header">Bitacora</li>
                <?php if($bitacoras != false) { ?>
                    <?php foreach($bitacoras as $b): ?>
                    <li>
                        <h4><strong><?php echo $b["fecha"]; ?></strong></h4>
                        <p>
                        <em><?php echo nl2br($b["contenido"]); ?></em></p>
                    </li>
                    <?php endforeach; ?>
                <?php } ?>
                </ul>
            <br />
                <div>
                    <a href="<?php echo base_url(); ?>index.php/bitacoras/nuevo/os/<?php echo $idos ?>"  data-rel="dialog" data-transition="slidedown" data-role="button" >Actualizar Bitacora</a>
                </div>
            </div>
        </div><!-- /content -->
<div data-role="footer">
		<h1>DERP - Designa</h1>
	</div>
</div><!-- /page -->

</body>
</html>