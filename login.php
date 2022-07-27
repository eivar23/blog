<?php
    //iniciar la conexion con BD
    include_once 'includes/conexion.php';
    //recoger datos del formulario
    if(isset($_POST)){
        $email = trim($_POST['email']);
        $pass = $_POST['pass'];
       
        //consulta para comprobar datos del ususuario
        $sql="SELECT * FROM usuarios WHERE email = '$email'";
        $login = mysqli_query($db, $sql);
    
        if($login && mysqli_num_rows($login) == 1){
            $usuario = mysqli_fetch_assoc($login);
            
            //comprobar contraseña
            $verify = password_verify($pass, $usuario['password']);
            
            if($verify){
                  //utilizar una sesion para guardar los datos del usuario logueado
                $_SESSION['usuario']=$usuario;
                
                if(isset($_SESSION['error_login'])){
                    session_unset($_SESSION['error_login']);
                }
                
            }else{
                  //si algo falla enviar una sesion con l fallo
                $_SESSION['error_login'] ="login incorrecto";
            }    
        
            

        }else{
            //mensaje de error
            $_SESSION['error_login']="login incorrecto!!";
        }
            
        
    }

  
  
    header('Location: index.php');
?>