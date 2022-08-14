<?php require_once 'conexion.php'; ?>

<?php require_once 'includes/helpers.php'; ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Blog de videojuegos</title>
         <link rel="stylesheet" href="assets/css/style.css"/>
         
    </head>
   
    <body>
        <!-- cabecera -->
        <header id="cabecera">
            <div id="logo">
                <a href="index.php">
                    Blog de videojuegos
                </a>
            </div>
        <!-- menu -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <?php
                        $categorias = obtenerCategorias($db);
                        if(!empty($categorias)):
                        while($categoria = mysqli_fetch_assoc($categorias)):
                    ?>
                    <li>
                        <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                    </li>
                    <?php
                        endWhile; 
                        endif;
                    ?>
                    <li>
                        <a href="index.php">Sobre nosotros</a>
                    </li>
                     <li>
                        <a href="index.php">Contáctanos</a>
                    </li>
                    
                </ul>

            </nav>
        <div class="clearfix"></div>
        </header>
        
      <div id="contenedor">