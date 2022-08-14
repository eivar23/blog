<?php
if(isset($_POST)){
    
    require './includes/conexion.php';


    $nombre = isset($_POST['name']) ? mysqli_real_escape_string($db,$_POST['name']):false;
    $apellido = isset($_POST['surname']) ? mysqli_real_escape_string($db, $_POST['surname']):false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']):false;
    
    
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
        $email_valido = false;
        $errores['email']="el email no es valido";
    }
    
    
    $guardar_usuario = false;
      
    if(count($errores)== 0){
        $guardar_usuario =true;
        
        //Actualzar usuario en BD
        $usuario = $_SESSION['usuario'];
        
        $sql = "UPDATE usuarios SET nombre = '$nombre', apellidos = '$apellido', email = '$email' WHERE id =".$usuario['id'];
        
        $guardar = mysqli_query($db, $sql);
        
        echo "run way but we're running in circles";
         
        if($guardar){
            $_SESSION['usuario']['nombre'] = $nombre;
            $_SESSION['usuario']['apellidos'] = $apellido;
            $_SESSION['usuario']['email'] = $email;
            
            $_SESSION['completado'] = "Tus datos se han actualizado con éxito";
        }else{
            $_SESSION['errores']['general'] = "fallo la actualización de datos";
            
        }
        
    }else{
        $_SESSION['errores'] = $errores;

    }
 }
header('Location: mis-datos.php');

?>