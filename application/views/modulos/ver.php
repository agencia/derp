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
	<a href="<?php echo base_url() ?>index.php/proyectos" data-icon="delete">atras</a>
                <h1>Modulos</h1>

	</div><!-- /header -->
<?php if(isset($Idmodulo)== false){
    echo "No hay modulos en este proyecto";
}
else{
?>
        <div data-role="content">
            <div>
                    <table>
                        <tr valign="top">
                            <td><strong>Nombre de Modulo:</strong></td>
                            <td><em><?php echo $Nombre_Modulo; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Descripcion:</strong></td>
                            <td><em><?php echo $Descripcion_Modulo; ?></em></td>
                        </tr>
                        <tr valign="top">
                            <td><strong>Funcionales:</strong></td><br>
                            <td><a href="<?php echo base_url(); ?>index.php/requerimientos/nuevo/<?php echo $Idmodulo; ?>"  data-mini="true" data-role="button" data-icon="plus">Nuevo</a></td>
                        </tr>
                    </table>
            </div>
            <br />
        </div><?php }?><!-- /content -->
<div data-role="footer">
		<h1>DERP - Designa</h1>
	</div>
</div><!-- /page -->

</body>
</html>