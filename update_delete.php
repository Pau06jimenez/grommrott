
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
                    <h3>Actuliza tus Datos</h3>
                    <p></p>
                    <button id="btn__iniciar-sesion">Actualizar</button>
                </div>
                <!-- CAJA TRASERA REGISTRO-->
                <div class="caja__trasera-register">
                    <h3>Eliminar datos</h3>
                    <p></p>
                    <button id="btn__Registrarse">Borrar Datos</button>
                </div>
            </div>
            <!--formulario de login y register-->

            <div class="contenedor__login-registro">
                <!--LOGIN-->
               <form action="update/update.php" method ="POST" class="formulario__login">
                <h2>Actualizar</h2>
                <input type="text" placeholder="Documento" name="documento" id="">
                <input type="text" placeholder=" Nuevo Correo Electronico" name="correo" id="">
                <input type="password" placeholder="Nuevo Contraseña" name="contrasena">
                <input type="text" placeholder="Nuevo Nombre de Usuario" name="nombre">
               
                <button>Actualizar</button>
               </form>
               <!-- REGISTRO-->
                <form action = "update/delete.php" method = "POST" class="formulario__register">
                    <h2>Borrar Datos</h2>
                    <input type="number" name="documento" id="" placeholder="Documento">
                    
                    <Button href =>Borrar</Button>
                </form>
            </div>

        </div>
        



    </main>
    <script src="./login-register/assets/jslogin/scriptlogin.js"></script>
</body>
</html>