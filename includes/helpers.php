<?php


function mostrarError($errores, $campo){
    $alerta = '';
    
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = "<div class = 'alerta alerta-error'>".$errores[$campo]."</div>";
    }
    return $alerta;
}

function borrarErrores(){
    $borrado=false;
    
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        $borrado = true;
    }
    if(isset($_SESSION['errores_entrada'])){
        $_SESSION['errores_entrada'] = null;
        $borrado = true;
    }
    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        $borrado = true;
    }
    return $borrado;
}

function obtenerCategorias($conexion){
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categorias = mysqli_query($conexion, $sql);
    
    $result  = array();
    if($categorias && mysqli_num_rows($categorias)>=1){
        $result = $categorias;
    }
    return $result;
}



function obtenerEntradas($conexion, $limit = null){
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
            "INNER JOIN categorias c ON e.categoria_id = c.id ".
            "ORDER BY e.id DESC ";
    if($limit){
        $sql .= "LIMIT 4";
    }
    $entradas = mysqli_query($conexion, $sql);
    
    $result  = array();
    if($entradas && mysqli_num_rows($entradas)>=1){
        $result = $entradas;
    }
    return $result;
}
?>