<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona de Administración</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            color: #222;
        }

        header {
            background: #222;
            color: white;
            text-align: center;
            padding: 25px 10px;
        }

        header h1 {
            font-size: 24px;
            margin: 0 0 8px;
        }

        header p {
            font-size: 12px;
            margin: 0;
        }

        .regreso {
            display: block;
            text-align: center;
            background: white;
            padding: 15px;
        }

        .regreso a {
            color: #222;
            text-decoration: none;
            font-size: 22px;
        }

        main {
            width: 90%;
            max-width: 650px;
            margin: 30px auto;
            padding: 25px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px #ddd;
        }

        h2 {
            text-align: center;
            font-size: 21px;
            margin-top: 0;
            margin-bottom: 25px;
        }

        .tabla-contenedor {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }

        th {
            background: #222;
            color: white;
        }

        th, td {
            padding: 10px 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        .opciones {
            white-space: nowrap;
            text-align: center;
        }

        .icono {
            display: inline-block;
            padding: 5px;
            margin: 2px;
            border-radius: 3px;
            text-decoration: none;
            border: 0;
            cursor: pointer;
            font-size: 14px;
        }

        .editar {
            background: #e5e5e5;
            color: #222;
        }

        .borrar {
            background: #222;
            color: white;
        }

        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 12px;
            font-size: 11px;
            margin-top: 35px;
        }

        @media (max-width: 500px) {
            main {
                padding: 15px;
            }

            th, td {
                padding: 8px 5px;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>Zona de Administración</h1>
        <p>Mensajes recibidos</p>
    </header>

    <div class="regreso">
        <a href="../miPortafolio/index.html" title="Regresar al portafolio">⌂</a>
    </div>

    <main>
        <h2>Mensajes Recibidos</h2>

        <div class="tabla-contenedor">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        require 'consulta_mensajes.php';
                        $rsMensajes = consultaMensajes();

                        while($arrMensaje= mysqli_fetch_array($rsMensajes)) {
                            echo "<tr>
                                <td>".$arrMensaje ['nombre']."</td>
                                <td>".$arrMensaje ['correo']."</td>
                                <td>".$arrMensaje ['mensaje']."</td>
                                <td>".$arrMensaje ['timeStaps']."</td>
                                <td class='opciones'>
                                <a class='icono editar'
                                href='editar.php?id=".$arrMensaje['id']."'
                                title='Editar'>✏️</a>

                                <button class='icono borrar'
                                     type='button'
                                     title='Borrar'>🗑️</button>
                                </td>
                            </tr>";
                            }
                    ?>

                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p>© 2026 Mi Portafolio</p>
        <p>Práctica de Programación Web</p>
    </footer>

</body>
</html>