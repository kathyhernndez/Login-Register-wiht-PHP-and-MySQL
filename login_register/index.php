<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime News | Foro</title>
    <link rel="shortcut icon" href="assets/image/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
    <main>
        <!--Contendor de la Web Application-->
        <div class="container__all">
            <!--Cajas Traseras-->
            <div class="caja__trasera">
                <!--Caja Login-->
                <div class="caja__trasera__login">
                    <h3>Ya tienes una cuenta</h3>
                    <p>¡Mira que hay de nuevo en la comunidad!</p>
                    <button id="btn__iniciar-sesion" class="btn">Iniciar Sesion</button>
                </div>
                <!--Caja Register-->
                <div class="caja__trasera__register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>¡Crea una Cuenta Para Iniciar Conversaciones Asombrosas!</p>
                    <button id="btn__registrarse" class="btn">Registrarse</button>
                </div>
            </div>
            <!--Formulario de Loggin y Registro-->
            <div class="container__login__register">
                <!--Login-->
                <form action="php/login_user_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Entrar</button>
                </form>
                <!--Registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombres">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>