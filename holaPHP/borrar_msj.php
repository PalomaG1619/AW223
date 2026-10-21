
<?php
require_once("conexion.php");

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

if (!$id) {
    header("Location: index.php?estadophp=error");
    exit;
}

$sql = "DELETE FROM mensajes WHERE id = ?";
$stmt = mysqli_prepare($conexion, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt) && mysqli_stmt_affected_rows($stmt) > 0) {
    $estado = "borrado";
} else {
    $estado = "error";
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);

header("Location: admin.php?estadophp=" . $estado);
exit;
?>