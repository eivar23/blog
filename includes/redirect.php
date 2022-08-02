<?php
/*esta pagina impide que usuarios no regustrados accedan a la página de crear categorias*/
if(!isset($_SESSION)){
  session_start();
}



if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
}