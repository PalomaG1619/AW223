<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1> Control de Gastos Personales</h1>


<h2>Registrar nuevo gasto</h2>
      <form id="formulario" action="registGasto.php" method="post">
                <div class="campo">
                    <label for="">
                        Concepto:
                    </label>
                    <input type="text"
                    id="concepto"
                    name="txtconcepto"
                    placeholder="Concepto">
                </div>

                <div class="campo">
                    <label for="">
                        Monto:
                    </label>
                    <input type="text"
                    id="monto"
                    name="txtmonto"
                    placeholder="Monto">
                </div>

                <div class="campo">
                    <label for="">
                        Categoria:
                    </label>
                    <input type="text"
                    id="categoria"
                    name="txtcategoria"
                    placeholder="">
                </div>

                <button type="submit">Registrar Pago</button>

                 <h2>Listado de Gastos</h2>

        <div class="tabla-contenedor">
            <table>
                <thead>
                    <tr>
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Categoria</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="opciones">
                            <a class="icono editar"
                               href="editar.php?id=1"
                               title="Editar">✏️</a>

                            <button class="icono borrar"
                                    type="button"
                                    title="Borrar">🗑️</button>
                        </td>
                    </tr>
                    <?php

                        while($arrMensaje= mysqli_fetch_array($rsMensajes)) {
                            echo "<tr>
                            <tr>
                                <td>".$arrMensaje ['concepto']."</td>
                                <td>".$arrMensaje ['monto']."</td>
                                <td>".$arrMensaje ['categoria']."</td>
                                <td>".$arrMensaje ['timeStap']."</td>
                                <td class='opciones'>
                                <a class='icono editar'
                                href='editar.php?id=1'
                                title='Editar'>✏️</a>

                                <button class='icono borrar'
                                     type='button'
                                     title='Borrar'>🗑️</button>
                            </td>
                            </tr>";
                            }
                    ?>

</body>
</html>
