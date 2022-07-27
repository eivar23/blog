<?php
    //iniciar la conexion con BD
    include_once 'includes/conexion.php';
    //recoger datos del formulario
    if(isset($_POST)){
        $email = trim($_POST['email']);
        $pass = $_POST['pass'];
    }
   
    //comprobar contraseña
    //consulta para comprobar datos del ususuario
    //utilizar una sesion para guardar los datos del usuario logueado
    //si algo falla enviar una sesion con l fallo
    //redirigir a index
?>