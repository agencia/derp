<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>DERP</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="<?php echo base_url(); ?>css/blitzer/jquery-ui-1.8.20.custom.css" type="text/css" rel="stylesheet" />
        <script src="<?php echo base_url(); ?>js/jquery-1.7.2.min"></script>
        <script src="<?php echo base_url(); ?>js/jquery-ui-1.8.20.custom.min"></script>
    </head>
    <body>
        <div style="width: 400px" class="ui-widget ui-widget-content ui-corner-all">
            <div class="ui-widget-header ui-corner-all ui-helper-clearfix">Login</div>
            <div class="ui-widget-content">
                <form METHOD="$POST" ACTION="<?php echo base_url(); ?>index.php/usuarios-entrar">
                    <table>
                        <tr>
                            <td>User</td>
                            <td><input type="text" name="usuario"/></td>
                        </tr>
                        <tr>
                            <td>Pass</td>
                            <td><input type="password" name="contrasena"/></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>
