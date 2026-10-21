
<?php
require_once "conexion.php";

$nombre = trim($_POST["txtnombre"] ?? "");
$correo = trim($_POST["txtcorreo"] ?? "");
$mensaje = trim($_POST["txtmensaje"] ?? "");

if ($nombre === "" || $correo === "" || $mensaje === "") {
    header("Location: index.php?estadophp=vacios");
    exit;
}

$sql = "INSERT INTO mensajes (nombre, correo, mensaje)
        VALUES (?, ?, ?)";

$stmt = mysqli_prepare($conexion, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sss",
    $nombre,
    $correo,
    $mensaje
);

if (mysqli_stmt_execute($stmt)) {
    $estado = "exito";
} else {
    $estado = "error";
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);

header("Location: index.php?estadophp=" . $estado);
exit;
?>