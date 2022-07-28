<?php
    //iniciar la conexion con BD
    include_once 'includes/conexion.php';
    
    if(isset($_POST)){
        //borrar error antiguo
        if(isset($_SESSION['error_login'])){
            session_unset($_SESSION['error_login']);
        }
        //recoger datos del formulario
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