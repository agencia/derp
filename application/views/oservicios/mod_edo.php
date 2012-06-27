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
    <div data-role="dialog">
		<div data-role="header">
			<h1>Cambiar Estado</h1>
		</div>

		<div data-role="content">
                    <form method="post" action="<?php echo base_url() ?>index.php/oservicio/set_mod_edo/<?php echo $idos ?>" data-ajax="false" >
                        <fieldset data-role="controlgroup">
                            <?php for($i=0;$i<count($estados);$i++): ?>
                            <input type="radio" name="status" id="radio-choice-<?php echo ($i+1) ?>" value="<?php echo ($i) ?>" <?php echo ($i == $status) ? ' checked="checked"' : ''; ?> />
                            <label for="radio-choice-<?php echo ($i+1) ?>"><?php echo $estados[$i] ?></label>
                            <?php endfor; ?>
                    </fieldset>
                        <input type="submit" value="Modificar" />
			<a href="<?php echo base_url() ?>index.php/oservicio/ver/<?php echo $idos ?>" data-role="button" data-rel="back">Cancelar</a>    
                    </form>
		</div>
	</div>
</body>
</html>