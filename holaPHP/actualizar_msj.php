<?php
require_once "conexion.php";

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
$nombre = trim($_POST["nombre"] ?? "");
$correo = trim($_POST["correo"] ?? "");
$mensaje = trim($_POST["mensaje"] ?? "");

// Evitar guardar campos vacíos
if (!$id || $nombre === "" || $correo === "" || $mensaje === "") {
    header("Location: index.php?estadophp=vacio");
    exit;
}

$sql = "UPDATE mensajes
        SET nombre = ?, correo = ?, mensaje = ?
        WHERE id = ?";

$stmt = mysqli_prepare($conexion, $sql);

mysqli_stmt_bind_param($stmt, "sssi", $nombre, $correo, $mensaje, $id
);

if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);

    header("Location: admin.php?estadophp=actualizado");
    exit;
} else {
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);

    header("Location: index.php?estadophp=error");
    exit;
}
?>