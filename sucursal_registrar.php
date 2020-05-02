<!– PARA EJEMPLO DASC — >
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--código que incluye Bootstrap-->
        <?php 
        include'inc/incluye_bootstrap.php';
        include 'inc/conexion.php'; 
        include 'inc/incluye_datatable_head.php';
        ?>
        <!--termina código que incluye Bootstrap-->

    </head>
    <body>
        <!--código que incluye el menú responsivo-->
        <?php include'inc/incluye_menu.php'; ?>
        
        <!--termina código que incluye el menú responsivo-->
        <div class="container">
            <div class="jumbotron">
                
                <form role="form" id="login-form" 
                      method="post" class="form-signin" 
                      action="proveedor_guardar.php">
                    <div class="h1">
                    <h1>Registrar Sucursal</h1>
                    </div>
                    <div class="h2">
                        DATOS DE LA SUCURSAL
                    </div>
                    <div class="form-group">

                    <label>Seleccione proveedor</label>
                    <?php include'lista_proveedor.php'; ?>
                    </div>

                    <div class="form-group">
                        <label>Direcci&oacute;n</label>
                        <input type="text" class="form-control" id="direccion_del_proveedor" name="direccion_del_proveedor"
                               placeholder="Ingresa direcci&oacute;n (Tienda matriz)" style="text-transform:uppercase;">
                    </div>

                    <div class="form-group">
                        <label>Tel&eacute;fono 1</label>
                        <input type="tel" class="form-control" id="telefono_1" name="telefono_1"
                               placeholder="Ingresa primer tel&eacute;fono" style="text-transform:uppercase;">
                    </div>

                    <label>Tel&eacute;fono 2</label>
                    <input type="tel" class="form-control" id="telefono_2" name="telefono_2"
                           placeholder="Ingresa segundo tel&eacute;fono" style="text-transform:uppercase;">
                    <br>
                    <div class="form-group">
                        <label for="correo_proveedor">Correo electr&oacute;nico</label>

                        <input type="email" class="form-control" id="correo_proveedor" name="correo_proveedor"
                               placeholder="Ingresa correo electr&oacute;nico" style="text-transform:uppercase;">

                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <input type="reset" class="btn btn-default" value="Limpiar">
                </form>
            </div>
        </div>
        <?php include'inc/incluye_datatable_pie.php' ?>

    </body>
</html>

