<?php require_once 'includes/redirect.php'; ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/lateral.php'; ?>



<div id ="principal">
    <h1>Crear entradas</h1>
    <form action="guardar-entrada.php" method="post">
        
        <label for="titulo">Ingrese el titulo</label>
        <input type="text" name="titulo"/>
         <?php echo isset($_SESSION['errores_entrada'])? mostrarError($_SESSION['errores_entrada'],'titulo'):''; ?>
        
        <label for="descripcion">Ingrese una descripcion</label>
        <textarea name="descripcion"></textarea>     
        <?php echo isset($_SESSION['errores_entrada'])? mostrarError($_SESSION['errores_entrada'],'descripcion'):''; ?>
        
        <label for="categoria">Nombre de la categoría</label>
        <select name="categoria">
            <?php $categorias= obtenerCategoprias($db);
            if(!empty($categorias)):
                 while($categoria = mysqli_fetch_assoc($categorias)):
            
             
            ?>
            <option value="<?= $categoria['id']?>">
                <?= $categoria['nombre']?>
            </option>
            <?php
                endwhile;
            endif;
            ?>
           
        </select>
        <?php echo isset($_SESSION['errores_entrada'])? mostrarError($_SESSION['errores_entrada'],'categoria'):''; ?>
        
        <input type="submit" value="Guardar"/>
        
    </form>
    <?php borrarErrores(); ?>
</div>

<?php require_once 'includes/footer.php'; ?>
