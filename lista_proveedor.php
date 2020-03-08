
        <?php
        include'inc/incluye_bootstrap.php';
        include 'inc/conexion.php';
       //include 'inc/incluye_datatable_head.php';
        ?>

        <!--termina código que incluye el menú responsivo-->
        
                <?php
                //Consulta sin parámetros
                $sel = $con->prepare("SELECT *from proveedor");

                /* consulta con parametros
                  $sel = $con->prepare("SELECT *from marca WHERE marca_id<=?");
                  $parametro = 50;
                  $sel->bind_param('i', $parametro);
                  finaliza consulta con parámetros */

                $sel->execute();
                $res = $sel->get_result();
                //$row = mysqli_num_rows($res); //numero de registros encontrados
                ?>
                

                <select name="select" class="form-control">
                <?php while ($f = $res->fetch_assoc()) { ?>
                  <option value="<?php echo $f['proveedor_id'] ?>"><?php echo $f['proveedor_nombre'] ?></option> 
                
               

                
                        <?php
                    }
                        $sel->close();
                        $con->close();
                        ?>
                        </select>

            
       
    

