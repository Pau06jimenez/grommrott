

<?php

   session_start();
   if (!isset($_SESSION['usuario']) > 0) {
    echo'
    <script>
       alert("Por favor debes iniciar sesion");
       window.location = "./login-register.php";
    </script>
    ';
    session_destroy();
    die();
    
   }
  
   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login-register/assets/csslogin/estiloscitas.css">
    <title>LOGIN Y REGISTRO</title>
</head>
<!DOCTYPE html>
<html>
<head>
    <title>Generar Factura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #94C3DF;
            text-align: center;
            padding: 50px;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        form {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin: 10px 0;
            font-size: 16px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <h1>consulta tu cita</h1>
    <form method="post" action="factura.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <input type="submit" value="consultar">
    </form>
</body>
</html>

