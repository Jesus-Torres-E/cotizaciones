<?php
$error_mensaje = "";
include 'inc/conexion.php';
$mysqli = new mysqli("localhost", "talleradmin", "somepassword", "tallerbd");
session_start();
if (isset($_SESSION['nombre_cliente']) && isset($_SESSION['descripcion_coche']) && !isset($_SESSION['fecha_actual'])) {
    echo 'La sesion exista, se va adestruir';
}
session_destroy();
if (!$mysqli->query("CALL eliminar_temporal()")) {
    $error_mensaje = "Falló la llamada eliminar temporal: (" . $mysqli->errno . ") " . $mysqli->error;
} else {
}
?>
<div class="jumbotron">
    <h3>
        <?php
        if (strcmp($error_mensaje, "") == 0) {
            echo 'Se elimin&oacute; la cotzaci&oacute;n que estaba en curso';
        } else {
            echo 'Se gener&oacute un error, avisar al desarrollador error 201'; //lo acabo de inventar
        }
        ?>
    </h3>
    <p>
        <a href="cotzacion_inicia.php" class="btn btn-primary" role="buton">ACEPTAR</a>
    </p>
</div>