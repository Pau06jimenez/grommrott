<?php
 
 session_start();
 if(isset($_SESSION['usuario'])){
    echo'
    <script>
      alert("La sesion ya esta iniciada")
      window.location = "./index.php";
    </script>
    ';
   
    
 };


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login-register/assets/csslogin/estilos.css">
    <title>LOGIN Y REGISTRO</title>
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <!-- CAJA TRASERA LOGIN-->
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <!-- CAJA TRASERA REGISTRO-->
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn__Registrarse">Registrarse</button>
                </div>
            </div>
            <!--formulario de login y register-->

            <div class="contenedor__login-registro">
                <!--LOGIN-->
               <form action="controller-login-register/login_usuario_be.php" method ="POST" class="formulario__login">
                <h2>INICIAR SESION</h2>
                <input type="text" placeholder="Correo Electronico" name="correo" id="">
                <input type="password" placeholder="Contraseña" name="contrasena">
                <input type="text" placeholder="Nombre de Usuario" name="nombre">
                <button>Entrar</button>
               </form>
               <!-- REGISTRO-->
                <form action = "controller-login-register/registro_usuario_be.php" method = "POST" class="formulario__register">
                    <h2>REGISTRARSE</h2>
                    <input type="text" name="id" id="" placeholder="Documento">
                    <input type="text" name="nombre" id="" placeholder="Nombre de usuario">
                    <input type="password" name="contrasena" placeholder="Contraseña">
                    <input type="email" name="correo" id="" placeholder="Correo Electronico">
                    <Button href =>Registrarse</Button>
                </form>
            </div>

        </div>
        



    </main>
    <script src="./login-register/assets/jslogin/scriptlogin.js"></script>
</body>
</html>