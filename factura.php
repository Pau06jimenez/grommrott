<!DOCTYPE html>
<html>
<head>
    <title>consulta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #D0ECE7, #A3E4D7);
            text-align: left;
            padding: 50px;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        .factura {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: 0 auto;
        }

        .factura label {
            display: block;
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }

        .factura p {
            font-size: 16px;
            color: #333 ;
        }

        .factura button {
            background: linear-gradient(to right, #F2F3F4, #D9DBDC, #BDC1C2);
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background (0.3s);
        }

        .factura button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <h2><center>Tu Cita</h2></center>
    <div class="factura">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $conexion = mysqli_connect("localhost", "root", "", "c_v_g") or die("Problemas en la conexión");

            // Utilizamos una consulta preparada para evitar la inyección SQL
            $consulta = "SELECT nombre, apellido, telefono, correo, servicios, fecha, hora FROM citas WHERE nombre = ?";
            $statement = mysqli_prepare($conexion, $consulta);
            mysqli_stmt_bind_param($statement, "s", $nombre);
            mysqli_stmt_execute($statement);

            $resultado = mysqli_stmt_get_result($statement);

            if ($reg = mysqli_fetch_array($resultado)) {
                echo "<p><b>Nombre:</b> " . $reg['nombre'] . " " . $reg['apellido'] . "</p>";
                echo "<p><b>Teléfono:</b> " . $reg['telefono'] . "</p>";
                echo "<p><b>Correo:</b> " . $reg['correo'] . "</p>";
                echo "<p><b>Servicios:</b> " . $reg['servicios'] . "</p>";
                echo "<p><b>Fecha de la cita:</b> " . $reg['fecha'] . "</p>";
                echo "<p><b>Hora de la cita:</b> " . $reg['hora'] . "</p>";
            } else {
                echo "No se encontraron registros para el nombre proporcionado.";
            }

            mysqli_close($conexion);
        } else {
            echo "Por favor, complete el formulario para generar la consulta.";
        }
        ?>
    </div>
</body>


