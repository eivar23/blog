<?php require_once 'includes/redirect.php'; ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/lateral.php'; ?>



<div id ="principal">
    <h1>Modificar mis datos</h1>
        <form action="actualizar-usuario.php" method="post">
                    
            <label for="name">Nombre</label>
            <input type="text" name="name" value="<?= $_SESSION['usuario']['nombre'] ?>">
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'nombre'):''; ?>
            
            <label for="apellidos">Apellidos</label>
            <input type="text" name="surname" value="<?= $_SESSION['usuario']['apellidos'] ?>">
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'apellido'):''; ?>

            <label for="email">Email</label>
            <input type="email" name="email" value="<?= $_SESSION['usuario']['email'] ?>">
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'email'):''; ?>

     
            <input type="submit" name="submit" value="Actualizar">

        </form>
    <?php borrarErrores(); ?>
</div>

<?php require_once 'includes/footer.php'; ?>
