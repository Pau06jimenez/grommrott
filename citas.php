
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
<body>
    <main>
        <p align="center">
        <div class="contenedor__todo">

            <div class="contenedor__login-registro">
                <!--LOGIN-->
               <form action="controller-login-register/registro_citas.php" method ="POST" class="formulario__login">
                <h2>Agendar Cita</h2>
                <input type="text" name="nombre" placeholder="NOMBRES">
                <input type="text" name="apellido" placeholder="APELLIDOS">
                <input type="number" name="telefono" placeholder="TELEFONO">
                <input type="email" name="correo" placeholder="CORREO">
                <select name="servicios" id="">
                    <option value="Consultas">Consultas</option>
                  <option value="Vacunación" >Vacunación</option>
                  <option value="Ecografia" >Ecografia</option>
                  <option value="Hospitalización" >Hospitalización</option>
                  <option value="Grooming" >Grooming</option>
                  <option value="Laboratorio">Laboratorio</option>
                    
                    
                </select>
                <input type="date" name="fecha">
                <input type="time" name="hora">
                <input type="text" name="mensaje" placeholder="ESCRIBE TU MENSAJE">
                <button>Agendar Cita</button>
               </form>
        </p>