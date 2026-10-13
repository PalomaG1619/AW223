
<?php
$id = $_GET["id"] ?? "1";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mensaje</title>

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
            text-align: center;
            background: white;
            padding: 15px;
        }

        .regreso a {
            color: #222;
            text-decoration: none;
            font-size: 22px;
            margin: 0 10px;
        }

        main {
            width: 90%;
            max-width: 500px;
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

        label {
            display: block;
            font-size: 13px;
            margin: 15px 0 6px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-family: Arial, sans-serif;
            font-size: 13px;
        }

        textarea {
            resize: vertical;
        }

        button {
            width: 100%;
            margin-top: 18px;
            padding: 11px;
            background: #222;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 12px;
            font-size: 11px;
            margin-top: 35px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Zona de Administración</h1>
        <p>Formulario para editar</p>
    </header>

    <div class="regreso">
        <a href="../index.html" title="Regresar al portafolio">⌂</a>
        <a href="admin.php" title="Regresar a administración">↶</a>
    </div>

    <main>
        <h2>Editar Mensaje</h2>

        <form action="#" method="post">

            <label for="nombre">Nombre:</label>
            <input
                type="text"
                id="nombre"
                name="nombre"
                value="Yuliana"
            >

            <label for="correo">Correo electrónico:</label>
            <input
                type="email"
                id="correo"
                name="correo"
                value="yuliana@ejemplo.com"
            >

            <label for="mensaje">Mensaje:</label>
            <textarea
                id="mensaje"
                name="mensaje"
                rows="5"
            ></textarea>

            <button type="button"
                    onclick="alert('Este botón es solo de prueba.')">
                Actualizar Mensaje
            </button>

        </form>
    </main>

    <footer>
        <p>© 2026 Mi Portafolio</p>
        <p>Práctica de Programación Web</p>
    </footer>

</body>
</html>