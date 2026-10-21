
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

function consultaMensajePorId($id) {
    require_once "conexion.php";

    $selectMsj = "SELECT * FROM mensajes WHERE id = ?";

    $stmt = mysqli_prepare($conexion, $selectMsj);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    $resultado = mysqli_stmt_get_result($stmt);
    $mensaje = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($stmt);
    mysqli_close($conexion);

    return $mensaje;
}