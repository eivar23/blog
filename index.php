<?php require_once 'includes/header.php'; ?>

<?php require_once 'includes/lateral.php'; ?>
        <div id="contenedor">
        
        
        <!-- caja principal -->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            
            
            <?php
                $entradas = obtenerEntradas($db);
                if(!empty($entradas)):
                    while($entrada = mysqli_fetch_assoc($entradas)):               
            ?>
            
                    <article class="entrada">
                        <a href="">
                            <h2><?=$entrada['titulo']?></h2>
                            <p><?=$entrada['descripcion']?></p>
                        </a>
                    </article>
            
             <?php
                    endWhile; 
                endif;
             ?>
            
           
            <div id="ver-todas">
                 <a href="">ver todas las entradas</a>
             </div>
           
        </div>
        
      
         
       
    <?php require_once 'includes/lateral.php'; ?>