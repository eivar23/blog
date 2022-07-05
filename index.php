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
                    <li>
                        <a href="index.php">categoria 1</a>
                    </li>
                    <li>
                        <a href="index.php">categoria 2</a>
                    </li>
                     <li>
                        <a href="index.php">Categotia 3</a>
                    </li>
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
                    <input type="text" name="apellidos">
                    
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    
                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass">
                    
                    <input type="submit" value="Registro">
                    
                </form>
            </div>
        </aside>
        
        <!-- caja principal -->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <a href="">
                    <h2>Titulo de mi entrada</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                    and scrambled it to make a type specimen book.</p>
                </a>
            </article>
            <article class="entrada">
                <a href="">
                    <h2>Titulo de mi entrada</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                    and scrambled it to make a type specimen book.</p>
                </a>
            </article>
            <article class="entrada">
                <a  href="">
                    <h2>Titulo de mi entrada</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                    and scrambled it to make a type specimen book.</p>
                </a>
            </article>
            <article class="entrada">
                 <a href="">
                    <h2>Titulo de mi entrada</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                    and scrambled it to make a type specimen book.</p>
                </a>
            </article>
            <div id="ver-todas">
                 <a href="">ver todas las entradas</a>
             </div>
           
        </div>
        
        <div class="clearfix"></div>
    </div>
         
       
       
        <!-- footer -->
        <footer id="footer">
            <p>Desarrollado por Eivar &copy; 2022</p>  
        </footer>
   
    </body>
</html>


