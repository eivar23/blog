
<?php require_once 'includes/redirect.php'; ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<div id ="principal">
    <h1>Crear categorías</h1>
    <form action="guardar-categoria.php" method="post">
        
        <label for="nombre">Nombre de la categoría</label>
        <input type="text" name="nombre"/>
        
        <input type="submit" value="Guardar"/>
        
    </form>
</div>

<?php require_once 'includes/footer.php'; ?>