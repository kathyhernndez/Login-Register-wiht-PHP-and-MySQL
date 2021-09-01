<?php
    session_start();

    include 'conexion_be.php';

    $correo  = $_POST['correo'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND password='$password'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: foro.php");
        exit();
    }else{
        echo'
        <script>
            alert("Usuario no registrado. Por Favor Verifica e intenta Nuevamente");
            window.location = "../index.php";
        </script>
        ';
        exit();
    };





?>