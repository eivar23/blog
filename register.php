<?php
if(isset($_POST)){
    
    require './includes/conexion.php';
    if(!isset($_SESSION)){
         session_start();
    }
   

    //recoger valores del formulario de registro
    //la funcion mysqli_real_escape_string intepreta las comillas como parte de la cadena introducida por el usuario y no
    // como parte de la consulta, en resumen permite que el usuario introduzca comillasy da mas seguridad a la base de datos
    $nombre = isset($_POST['name']) ? mysqli_real_escape_string($db,$_POST['name']):false;
    $apellido = isset($_POST['surname']) ? mysqli_real_escape_string($db, $_POST['surname']):false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']):false;
    $password = isset($_POST['pass']) ? mysqli_real_escape_string($db, $_POST['pass']):false;
    
    
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
        
        //cifrar contraseñas de usuario
        $pass_ecry = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);        
        
        //insertar usuario en BD
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre','$apellido','$email','$pass_ecry',CURDATE());";
        $guardar = mysqli_query($db, $sql);
        
        if($guardar){
            $_SESSION['completado'] = "el registro se ha completado con exito";
        }else{
            $_SESSION['errores']['general'] = "fallo al guardar el usuario";
        }
        
    }else{
        $_SESSION['errores'] = $errores;
         
       
    }
 }
 header('Location: index.php');

?>