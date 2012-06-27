<!DOCTYPE html> 
<html> 
	<head> 
	<title>Bitacora</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="<?php echo base_url() ?>css/themes/own.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile.structure-1.1.0.min.css" /> 

	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head> 
<body> 
    <div data-role="dialog">
		<div data-role="header">
			<h1>Nueva Entrada</h1>
		</div>

		<div data-role="content">
                    <form method="post" action="<?php echo base_url() ?>index.php/bitacoras/set/<?php echo $tipo; ?>/<?php echo $id; ?>" data-ajax="false" >
                <textarea name="contenido"></textarea>
                <input type="submit" data-icon="check" value="Registrar" />
            </form>
		</div>
	</div>

</body>
</html>