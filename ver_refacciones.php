<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        include'inc/incluye_bootstrap.php';
        include 'inc/conexion.php';
        include 'inc/incluye_datatable_head.php';
        ?>
    </head>
    <body>
        <!--código que incluye el menú responsivo-->
        <?php include'inc/incluye_menu.php' ?>
        <!--termina código que incluye el menú responsivo-->
        <div class="container">
            <div class="jumbotron">
                <?php
                //Consulta sin parámetros
                $sel = $con->prepare("SELECT *from marca");

                /* consulta con parametros
                  $sel = $con->prepare("SELECT *from marca WHERE marca_id<=?");
                  $parametro = 50;
                  $sel->bind_param('i', $parametro);
                  finaliza consulta con parámetros */

                $sel->execute();
                $res = $sel->get_result();
                $row = mysqli_num_rows($res);
                ?>
                Elementos devueltos por la consulta: <?php echo $row ?>

                <select name="select" class="form-control">
                <?php while ($f = $res->fetch_assoc()) { ?>
                  <option value="<?php echo $f['marca_id'] ?>"><?php echo $f['marca_nombre'] ?></option> 
                
               

                
                        <?php
                    }
                        $sel->close();
                        $RefaccionesPorMarca = $con->prepare("SELECT *from marca WHERE marca_id<=?");
                        $resRefaccionesPorMarca = $RefaccionesPorMarca->get_result();
                        $rowRefaccionesPorMarca = mysqli_num_rows($RefaccionesPorMarca);
                        $con->close();
                        ?>
                </select>

                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <th>ID REFACCION</th>
                    <th>NOMBRE REFACCION</th>
                    <th>DESCRIPCION REFACCION</th>
                    </thead>
                    <tfoot>
                    <th>ID REFACCION</th>
                    <th>NOMBRE REFACCION</th>
                    <th>DESCRIPCION REFACCION</th>
                    </tfoot>
                    <tbody>
                        <?php while ($f = $res->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $f['marca_id'] ?></td>
                                <td><?php echo $f['marca_nombre'] ?></td>
                            </tr>
                            <?php
                        }
                        $sel->close();
                        $con->close();
                        ?>
                    <tbody>
                </table>
       
        <?php
        include 'inc/incluye_datatable_pie.php';
        ?>

    </body>
</html>

