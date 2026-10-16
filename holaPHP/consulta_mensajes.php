
<?php

function consultaMensajes() {
    require_once"conexion.php";

    $selectMsj = "SELECT * FROM mensajes";

    try {
        $rsMensaje = mysqli_query($conexion, $selectMsj);
        mysqli_close($conexion);
        return $rsMensaje;
    } catch (Exception) {
        die('Algo paso al consultar: '.$e->getMessage() );
    }
}  