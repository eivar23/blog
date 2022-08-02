<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';
    if(isset($_POST['nombre'])){
        $nombre = isset($_POST['nombre'])?mysqli_real_escape_string($db, $_POST['nombre']) :false;
    }
      //validar los datos antes de guardarlos
    $errores = array();
    
    if(!empty($nombre)&&!is_numeric($nombre) &&!preg_match("/[0-9]/",$nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre']="el nombre no es valido";
    }
    if(count($errores)  == 0){
        $sql = "INSERT INTO categorias VALUES(NULL, '$nombre');";
        $guardar = mysqli_query($bd, $sql);
    }
}

header("location: index.php");