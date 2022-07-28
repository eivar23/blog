<?php require_once 'includes/helpers.php'; ?>

<!-- barra lateral -->
        <aside id="sidebar">
            
            <?php if(isset($_SESSION['usuario'])):?>
             <div id="usuario-logueado" class="bloque">
                 <h3> Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'] ?></h3>
                 <!--botones-->
                 <a class="boton btn-verde" href="cerrar.php" >crear entrada</a>
                 <a class="boton btn-naranja" href="cerrar.php" >mis datos</a>
                 <a class="boton" href="cerrar.php" >cerrar sesión</a>
             </div>
            <?php endif; ?>
            
            <div id="login" class="bloque">
                <h3>Inicia sesión</h3>
                
                <?php if(isset($_SESSION['error_login'])):?>
                <div class="alerta alerta-error">
                    <?=$_SESSION['error_login'];?>
                </div>
               <?php endif; ?>
                
                <form action="login.php" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    
                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass">
                    
                    <input type="submit" value="Enviar">
                    
                </form>
            </div>
              <div id="registro" class="bloque">
                 
                  <h3>Regístrate</h3>
                  
                  <!-- MOSTRAR ERRORES -->
                  <?php if(isset($_SESSION['completado'])): ?>
                    <div class="alerta alerta-exito">
                        <?=$_SESSION['completado']?>
                    </div>
                  <?php elseif(isset($_SESSION['errores']['general'])): ?>
                    <div class="alerta alerta-error">
                        <?=$_SESSION['errores']['general']?>
                    </div>
                  <?php endif; ?>
                  
                  
                <form action="register.php" method="post">
                    
                    <label for="name">Nombre</label>
                    <input type="text" name="name">
                    <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'nombre'):''; ?>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="surname">
                    <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'apellido'):''; ?>
                    
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'email'):''; ?>
                    
                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass">
                    <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'password'):''; ?>
                    
                    <input type="submit" name="submit" value="Registro">
                    
                </form>
                  <?php borrarErrores(); ?>
            </div>
        </aside>