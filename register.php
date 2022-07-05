<?php

session_start();
if(isset($_POST)){
    
    
    //recoger valores del formulario de registro
    $nombre = isset($_POST['name']) ? $_POST['name']:false;
    $apellido = isset($_POST['surname']) ? $_POST['surname']:false;
    $email = isset($_POST['email']) ? $_POST['email']:false;
    $password = isset($_POST['pass']) ? $_POST['pass']:false;
    
    
    //validar los datos antes de guardarlos
    $errores = array();
    
    if(!empty($nombre)&&!is_numeric($nombre) &&!preg_match("/[0-9]/",$nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre']="el nombre no es valido";
    }
     if(!empty($apellido)&&!is_numeric($apellido) &&!preg_match("/[0-9]/",$apellido)){
        $apellido_valido = true;
    }else{
        $apellido_valido = false;
        $errores['apellido']="el apellido no es valido";
    }
    
    if(!empty($email)&&filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_valido = true;
    }else{
        $apellido_valido = false;
        $errores['email']="el email no es valido";
    }
    if(!empty($password)){
        $passwod_valido = true;
    }else{
        $passwod_valido = false;
        $errores['password']='la contraseña está vacía';
    }
    $guardar_usuario = false;
    if(count($errores)==0){
        $guardar_usuario =true;
        //insertar usuario en BD
        
    }else{
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }
    

}

?>