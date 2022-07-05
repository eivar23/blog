<?php

?>

<!-- barra lateral -->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Inicia sesión</h3>
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
                <form action="register.php" method="post">
                    
                    <label for="name">Nombre</label>
                    <input type="text" name="name">
                    
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="surname">
                    
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    
                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass">
                    
                    <input type="submit" name="submit" value="Registro">
                    
                </form>
            </div>
        </aside>