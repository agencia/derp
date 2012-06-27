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
	<a href="<?php echo base_url() ?>index.php/oservicio" data-icon="delete">Cancelar</a>
		<h1>Ordenes de Servicio</h1>
	</div><!-- /header -->

        <div data-role="content">
            <form method="post" action="../../index.php/oservicio/setnuevo" data-ajax="false" >
                <label for="txttitulo">Titulo</label>
                <input type="text" name="titulo" id="txttitulo" />
                <label for="txtdescripcion">Descripcion</label>
                <textarea name="descripcion" id="txtdescripcion"></textarea>
                <label for="txtproyecto">Proyecto</label>
                <select name="idproyecto">
                    <option value="0">Selecciones un Proyecto</option>
                    <?php foreach($proyectos as $c): ?>
                        <option value="<?php echo $c["idproyecto"] ?>"><?php echo $c["razon"] ?> - <?php echo $c["proyecto"] ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="txttiempo">Tiempo estimado (hr)</label>
                <input type="text" name="tiempo_estimado" id="txttiempo" />
                <input type="submit" data-icon="check" value="Registrar" />
            </form>
        </div><!-- /content -->
<div data-role="footer">
		<h1>DERP - Designa</h1>
	</div>
</div><!-- /page -->

</body>
</html>