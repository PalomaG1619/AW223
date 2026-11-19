
<?php
require_once "conexion.php"
$concepto = trim($_POST["txtconcepto"] ?? "");
$monto = trim($_POST["txtmonto"] ?? "");
$categoria = trim($_POST["txtcategoria"] ?? "");

if ($concepto === "" || $monto == "" || $categoria) {
    header("Location: index.php?estadophp=vacios");
    exit;
}

$sql = "INSERT INTO gastos (concepto, monto, categoria)
        VALUES (?, ?, ?)";

$stmt = mysqli_prepare($conexion, $sql);

$stmt->bind_param("sss", $concepto, $monto, $categoria);
mysqli_stmt_bind_param(
    $stmt,
    "sss",
    $concepto,
    $monto,
    $categoria
);

if(mysqli_stmt_execute($stmt)) {
    $estado = "exito";
} else {
    $estado = "error";
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);

header("Location: index.php?estadophp=" . $estado);
exit;
?>